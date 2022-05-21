<?php

//error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kashmir";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
 else
    {
        echo "<br>sign in created successfully! <br>";
      }
      else {
        echo "<br> Plz fill out complete form! <br>";
      }
}
$conn->close();

 ?>