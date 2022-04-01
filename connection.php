<?php
  $servername = "localhost";
  $username = "root";
  $password = "3pfam3fdm3";
  $dbname = "ecomm_shoes";

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
  
?>