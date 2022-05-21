
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
        echo "<br>Connected successfully! <br>";

  // collect value of input field
           //remove
           if(isset($_POST['Remove'])) {
                     $EMAIL = $_POST['emailPhone'];
                     $Designation = $_POST['designation'];
                    if($Designation=='CUSTOMER'){

                        $sql = "DELETE FROM `customer` WHERE `Email` = '$EMAIL'";

                    }
                    else if($Designation=='CHEF'){
                            $sql = "DELETE FROM `chef` WHERE `Email` = '$EMAIL'";
                    }
                    else if($Designation=='CASHIER'){
                            $sql = "DELETE FROM `cashier` WHERE `Email` = '$EMAIL'";
                    }
                    else if($Designation=='WAITER'){
                            $sql = "DELETE FROM `waiter` WHERE `Email` = '$EMAIL'";
                    }
                    else {
                            echo "<br> ENTER CORRECT DETAIL! <br>";
//                             header("Location: remove_detail.php");
                               die;
                     }
                if ($conn->query($sql) === TRUE) {
                     echo "Record deleted successfully";
//                      header("Location: manager.html");
                     die;
                 } else {
                        echo "Error deleting record: " . $conn->error;
                   }
            }
     }

?>





