<?php 
    if(isset($_POST["submit"])) {
        echo "it works!";
        
        // grab data
        $email = $_POST["email"];
        $uname = $_POST["uname"];
        $psw = $_POST["psw"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        // handle errors
        if (emptyInputSignup($email, $uname, $psw) !== false) {
            header("location: ../signin.php?error=empyinput");
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
        createUser($conn, $email, $psw, $email);


    } else {
        header("location: ../signin.php");
        exit();
    }
