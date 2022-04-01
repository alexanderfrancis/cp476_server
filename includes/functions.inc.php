<?php   
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
        header("location: ../signin.php?error=none");
        exit();        
    }