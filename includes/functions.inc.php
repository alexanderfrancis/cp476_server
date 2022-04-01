<?php 
    /**
     * SIGN UP FUNCTIONS
    */

    function emptyInputSignup($email, $uname, $psw) {
        $result;
        if (empty($email) || empty($uname) || empty($psw)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    // currently not in use
    function invalidUname($uname) {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email) {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    } 

    function unameExists($conn, $uname, $email) {
        // prepare SQL statement
        $sql = "SELECT * FROM users WHERE uname = ? OR email = ?;"; // verify SQL statement
        $stmt = mysqli_stmt_init($conn); 
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signin.php?error=stmtfailed");
            exit();
        } 
          
        mysqli_stmt_bind_param($stmt, "ss", $uname, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        // check that data is fetched         
        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }
    
    function createUser($conn, $uname, $email, $psw) {
        // hash password before storing
        $phash = password_hash($psw, PASSWORD_DEFAULT); 
        
        // prepare SQL statment
        $sql = "INSERT INTO users (uname, email, phash) VALUES (?, ?, ?);"; // verify SQL statement
        $stmt = mysqli_stmt_init($conn); 
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signin.php?error=stmtfailed");
            exit();
        } 
          
        mysqli_stmt_bind_param($stmt, "sss", $uname, $email, $phash);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        session_start();
        $_SESSION["uname"] = $uname;
        header("location: ../index.php");
        exit();
    }

    /**
     * LOGIN FUNCTIONS
     */

    function emptyInputLogin($uname, $psw) {
        $result;
        if (empty($uname) || empty($psw)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $uname, $psw) {
        $unameExists = unameExists($conn, $uname, $uname);
        
        if ($unameExists === false) {
            header("location: ../signin.php?error=wronglogin");
            exit();
        }

        $phash = $unameExists["phash"];
        $checkPsw = password_verify($psw, $phash);

        if ($checkPsw === false) {
            header("location: ../signin.php?error=wronglogin");
            exit();
        } else if ($checkPsw === true) {
            session_start();
            $_SESSION["uname"] = $unameExists["uname"];
            header("location: ../index.php");
            exit();
        }
    }