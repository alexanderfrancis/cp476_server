<?php 
    if(isset($_POST["submit"])) {
        echo "it works!";
        
        // grab data
        $uname = $_POST["uname"];
        $psw = $_POST["psw"];

        require_once '../connection.php';
        require_once 'functions.inc.php';

        $conn = openConnection($servername, $username, $password, $dbname);

        // handle errors
        if (emptyInputLogin($uname, $psw) !== false) {
            header("location: ../signin.php?error=emptyinput");
            exit(); 
        }

        // signup the user
        loginUser($conn, $uname, $psw);

    } else {
        header("location: ../index.php");
        exit();
    }
