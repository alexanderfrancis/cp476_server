<?php
  $servername = "localhost";
  $username = "root";
  $password = "password";
  $dbname = ""; // name of username DB

  function openConnection($servername, $username, $password, $dbname) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
  }

  function closeConnection($conn) {
    $conn->close();
  }
  
