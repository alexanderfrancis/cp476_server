<?php 
    session_start();
    
    require_once '../connection.php';
    require_once 'functions.inc.php';

    if(isset($_POST['add'])) {
        // add product id to cart if not already present
        $id = $_POST['id'];
        var_dump($id);
        $cart = $_SESSION['cart'];

        if (!in_array($id, $cart)) {
            $cart[] = $id;
        }

        $_SESSION['cart'] = $cart;
        header("location: ../index.php");
        exit();
    }

    if (isset($_POST['remove'])) {
        // remove product id from cart
        $id = $_POST['id'];
        $cart = $_SESSION['cart'];

        if (($key = array_search($id, $cart)) !== false) {
            unset($cart[$key]);
        }
    }

    if (isset($_POST['quantity'])) {
        // set quantity
        $id = $_POST['id'];
        $cart = $_SESSION['cart'];
        $quantity = $_POST['quantity'];
        $quantities = $_SESSION['quantities'];

        $key = array_search($id, $cart);
        $quantities[$key] = $quantity;

        // update total price
        $total = 0;
        $count = 0;

        foreach ($cart as &$item) {
            $sql = "SELECT cost FROM listings WHERE listings.listid = $item";
            $conn = openConnection($servername, $username, $password, $dbname);
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            $total = $total + ($quantity[$count] * $row['cost']);
            $count++;
            closeConnection($conn);
        }

        $_POST['total'] = $total;
    }

    if (isset($_POST['checkout'])) {
        // update database and clear cart
        $cart = $_SESSION['cart'];
        $quantities = $_SESSION['quantities'];
        $count = 0;

        foreach ($cart as &$item) {
            $sql = "UPDATE listings SET stock = stock - $quantities[$count] WHERE listid = $item";
            $conn = openConnection($servername, $username, $password, $dbname);
            $result = $conn->query($sql);

            $count++;
            closeConnection($conn);
        }

        $cart = array();
        $_SESSION['cart'] = $cart;
        header("location: ../all.php");
    }