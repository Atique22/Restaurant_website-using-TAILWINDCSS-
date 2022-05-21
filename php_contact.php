<?php
//error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kashmir_r";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else
    {
            echo "<br> successfully! <br>";
            $NAME = $_POST['name'];
            $EMAIL = $_POST['email'];
            $message = $_POST['message'];
            if (!empty($NAME) && !empty($EMAIL) &&  !empty($message) ) {
                        $msg = "INSERT INTO CONTACT VALUES ('?','$NAME','$EMAIL','$message')";
                         if ($conn->query($msg) === TRUE) {
                            echo "<br>  created successfully! <br>";
                			mysqli_query($conn, $msg);
                 			header("Location: Contact.html");
                			die;
                        }
                        else {echo "Error: " . $msg . "<br>" . $conn->error;}
             }
        }
?>