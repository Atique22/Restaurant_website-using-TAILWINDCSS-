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
        echo "<br>Sign up Connected successfully! <br>";

  // collect value of input field
            $NAME = $_POST['full-name'];
            $PHONE = $_POST['phone'];
            $CNIC = $_POST['CNIC'];
            $EMAIL = $_POST['email'];
            $Designation = $_POST['designation'];
            $Password = $_POST['Password'];
            $Security = $_POST['security'];

   if (!empty($NAME) && !empty($PHONE) &&  !empty($CNIC) &&  !empty($EMAIL) &&  !empty($Designation) &&  !empty($Password) ) {

            if($Designation=='CUSTOMER'){
///inserted data
                $sql = "INSERT INTO CUSTOMER VALUES ('?','$NAME', '$CNIC','$PHONE' ,'$EMAIL','$Password')";

// sql data
            if ($conn->query($sql) === TRUE) {
                echo "<br> New record created successfully! <br>";

                			mysqli_query($conn, $sql);
                 			header("Location: LOGIN.php");
                			die;
             }
            else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

      }
      else if($Designation=='MANAGER'){

                    if($Security=='M123')
                     {      $sql = "INSERT INTO MANAGER VALUES ('?','$NAME', '$CNIC','$PHONE' ,'$EMAIL','$Password')";

           // sql data
                       if ($conn->query($sql) === TRUE) {
                           echo "<br> New record created successfully! <br>";

                           			mysqli_query($conn, $sql);
                            			header("Location: LOGIN.php");
                           			die;
                        }
                       else {
                               echo "Error: " . $sql . "<br>" . $conn->error;
                           }
                      }
                      else
                      {
                            echo "<br> your security not match! <br>";
//                             header("Location: SIGNUP.php");
                            die;
                      }

                 }
                 else if($Designation=='CHEF'){
                                      if($Security=='H123')
                                                         {      $sql = "INSERT INTO CHEF VALUES ('?','$NAME', '$CNIC','$PHONE' ,'$EMAIL','$Password')";

                                               // sql data
                                                           if ($conn->query($sql) === TRUE) {
                                                               echo "<br> New record created successfully! <br>";

                                                               			mysqli_query($conn, $sql);
                                                                			header("Location: LOGIN.php");
                                                               			die;
                                                            }
                                                           else {
                                                                   echo "Error: " . $sql . "<br>" . $conn->error;
                                                               }
                                                          }
                                                          else
                                                          {
                                                                echo "<br> your security not match! <br>";
                                                                //header("Location: SIGNUP.php");
                                                                die;
                                                          }
                   }
                 else if($Designation=='CASHIER'){
                                      if($Security=='C123')
                                                         {      $sql = "INSERT INTO CASHIER VALUES ('?','$NAME', '$CNIC','$PHONE' ,'$EMAIL','$Password')";
                                                 //       $sql = "INSERT INTO signup VALUES ('Atiq', '03495791363', '8120175011601' ,'bsce1901@itu.edu.pk','CUSTOMER','999900')";

                                               // sql data
                                                           if ($conn->query($sql) === TRUE) {
                                                               echo "<br> New record created successfully! <br>";

                                                               			mysqli_query($conn, $sql);
                                                                			header("Location: LOGIN.php");
                                                               			die;
                                                            }
                                                           else {
                                                                   echo "Error: " . $sql . "<br>" . $conn->error;
                                                               }
                                                          }
                                                          else
                                                          {
                                                                echo "<br> your secuirity not match! <br>";
//                                                                 header("Location: SIGNUP.php");
                                                                die;
                                                          }
                   }
                 else if($Designation=='WAITER'){
                              if($Security=='W123')
                                                 {      $sql = "INSERT INTO WAITER VALUES ('?','$NAME', '$CNIC','$PHONE' ,'$EMAIL','$Password')";

                                       // sql data
                                                   if ($conn->query($sql) === TRUE) {
                                                       echo "<br> New record created successfully! <br>";

                                                       			mysqli_query($conn, $sql);
                                                        			header("Location: LOGIN.php");
                                                       			die;
                                                    }
                                                   else {
                                                           echo "Error: " . $sql . "<br>" . $conn->error;
                                                       }
                                                  }
                                                  else
                                                  {
                                                        echo "<br> your secuirity not match! <br>";
                                                        header("Location: SIGNUP.php");
                                                        die;
                                                  }
                  }
                 else {
                         echo "<br> Plz fill out complete form! <br>";
                         header("Location: SIGNUP.php");
                         die;
                       }

      }
      else {
        echo "<br> Plz fill out complete form! <br>";
//         header("Location: SIGNUP.php");
        die;
      }

}
$conn->close();

 ?>
