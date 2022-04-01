<?php 
    if(isset($_POST["submit"])) {
        echo "it works!";
        
        // grab data
        $email = $_POST["email"];
        $uname = $_POST["uname"];
        $psw = $_POST["psw"];

        require_once '../connection.php';
        require_once 'functions.inc.php';

        $conn = openConnection($servername, $username, $password, $dbname);

        // handle errors
        if (emptyInputSignup($email, $uname, $psw) !== false) {
            header("location: ../signin.php?error=emptyinput");
            exit(); 
        }
        if (invalidUname($uname) !== false) {
            header("location: ../signin.php?error=invaliduname");
            exit(); 
        }
        if (invalidEmail($email) !== false) {
            header("location: ../signin.php?error=invalidemail");
            exit(); 
        }
        if (unameExists($conn, $uname, $email) !== false) {
            header("location: ../signin.php?error=unametaken");
            exit(); 
        }

        // signup the user
        createUser($conn, $uname, $email, $psw);


    } else {
        header("location: ../index.php");
        exit();
    }
