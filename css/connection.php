<?php

  class Database {

    public function getConnection() {
      $conn = new mysqli("localhost", "root", "", "examen");

      if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
      }

      return $conn;
    }

    public function closeConnection() {
      mysqli::close();
    }
  }
?>
