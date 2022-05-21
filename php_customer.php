

<?php
session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kashmir_r";
// Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);
// session_destroy();
if(isset($_POST['add_cart']))
{
     $product_name = $_POST['PNAME'];
     $product_price = $_POST['P_PRICE'];
     $total_p = $_POST['ptotal'];

    $array_check = array_column($_SESSION['cart'],'ProductName');
	if(in_array($product_name,$array_check)) {
		echo "
		<script>
		alert('Product is already added to your cart!');
		</script>
		";
 		  header("Location: Add_cart.php");
	    }
               else if(isset($_POST['update'])) {
                   $_SESSION['cart'][] = array('ProductName'=>$product_name,'ProductPrice'=>$product_price,'ProductQuantity'=>$_POST['P_Quantity']);
                  }
                  else{
                    $_SESSION['cart'][] = array('ProductName'=>$product_name,'ProductPrice'=>$product_price,'ProductQuantity'=>1);
//                             print_r($_SESSION['cart']);
                        header('Location: Add_cart.php');
                    }
}

//remove
                 if(isset($_POST['remove'])) {
                 	foreach($_SESSION['cart'] as $key => $value) {
                        if($value['ProductName']===$_POST['item'])
                        {
                            unset($_SESSION['cart'][$key]);
                            $_SESSION['cart'] = array_values($_SESSION['cart']);
                            header('Location: Add_cart.php');

                        }
                    }
                 }
//update
                 if(isset($_POST['update'])) {
                      $product_name = $_POST['PNAME'];
                      $product_price = $_POST['P_PRICE'];
                 	foreach($_SESSION['cart'] as $key => $value) {
                        if($value['ProductName']===$_POST['item'])
                        {
                            $_SESSION['cart'][$key] = array('ProductName'=>$product_name,'ProductPrice'=>$product_price,'ProductQuantity'=>$_POST['P_Quantity']);
                            $_SESSION['cart'] = array_values($_SESSION['cart']);
                            header('Location: Add_cart.php');

                        }
                    }
                 }
  //place order
                 if(isset($_POST['place_order']))
                {
                          echo "Order Placed.";
                           $email =  $_SESSION['emailPhone'];
                           $cus = "select * from CUSTOMER where Email = '$email'  limit 1";
                           $result_cus = mysqli_query($connection, $cus);
                           if(mysqli_num_rows($result_cus) > 0)
                           				{
                                               	 $row = mysqli_fetch_assoc($result_cus);
                                                    $Name = $row["Name"];
                                                    $Email = $row["Email"];
                                                    $Phone = $row["Phone"];
                                        }

                      if($_SESSION['cart']) {
                        foreach($_SESSION['cart'] as $key => $value) {
      ///inserted data
                        $total=0;
                        $total += $value['ProductPrice']*$value['ProductQuantity'];
                        $sql = "INSERT INTO `order` VALUES ('?','$Name','$Phone','$Email','$value[ProductName]','$value[ProductPrice]','$value[ProductQuantity]','$total')";
                            if ($connection->query($sql) === TRUE) {
                                                           echo "<br> New record created successfully! <br>";
                                                           mysqli_query($connection, $sql);
                                                           header("Location: customer.php");
                                                           die;
                            }
                             else {  echo "Error: " . $sql . "<br>" . $connection->error; }

                            }
                         }
                         header("Location: customer.php");
                         die;


                }

?>