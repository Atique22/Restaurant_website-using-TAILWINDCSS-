<?php
session_start();
//error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kashmir_r";
    $Designation = $_POST['designation'];
// Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($connection->connect_error) {
      die("Connection failed: " . $connection->connect_error);
    }
		//something was posted
		$EmailPhone = $_POST['emailPhone'];
		$Password = $_POST['password'];
		if(!empty($EmailPhone) && !empty($Password))
		{
//read from database

         if($Designation=='CUSTOMER'){
               $_SESSION['emailPhone'] = $EmailPhone;
			$cus = "select * from CUSTOMER where Email = '$EmailPhone' AND Password ='$Password'  limit 1";
		    $result_cus = mysqli_query($connection, $cus);}
         else if($Designation=='MANAGER'){
			$man = "select * from MANAGER where Email = '$EmailPhone' AND Password ='$Password' limit 1";
			$result_man = mysqli_query($connection, $man);}
         else if($Designation=='CHEF'){
			$che = "select * from CHEF where Email = '$EmailPhone' AND Password ='$Password' limit 1";
			$result_che = mysqli_query($connection, $che);}
         else if($Designation=='CASHIER'){
			$cas = "select * from CASHIER where Email = '$EmailPhone' AND Password ='$Password' limit 1";
			$result_cas = mysqli_query($connection, $cas);}
         else if($Designation=='WAITER'){
			$wai = "select * from WAITER where Email = '$EmailPhone' AND Password ='$Password' limit 1";
			$result_wai = mysqli_query($connection, $wai);}

				if(mysqli_num_rows($result_cus) > 0)
				{
                    	 $row = mysqli_fetch_assoc($result_cus);
                         $Name = $row["Full Name"];
                         echo "Login Successful...Welcome ".$Name;
                         header("Location: customer.php");
                }
				else if(mysqli_num_rows($result_man) > 0)
				{
                    	 $row = mysqli_fetch_assoc($result_man);
                         $Name = $row["Full Name"];
                         echo "Login Successful...Welcome ".$Name;
                         header("Location: manager.html");
                }
				else if(mysqli_num_rows($result_che) > 0)
				{
                    	 $row = mysqli_fetch_assoc($result_che);
                         $Name = $row["Full Name"];
                         echo "Login Successful...Welcome ".$Name;
                         header("Location: chef.html");
                }
				else if(mysqli_num_rows($result_cas) > 0)
				{
                    	 $row = mysqli_fetch_assoc($result_cas);
                         $Name = $row["Full Name"];
                         echo "Login Successful...Welcome ".$Name;
                         header("Location: cashier.html");
                }
				else if(mysqli_num_rows($result_wai) > 0)
				{
                    	 $row = mysqli_fetch_assoc($result_wai);
                         $Name = $row["Full Name"];
                         echo "Login Successful...Welcome ".$Name;
                         header("Location: waiter.html");
                }
                else
                 {
        			echo "wrong Email or password!";
        			 header("Location: LOGIN.php");
                            die;
                 }
		}
		else
		{
			echo "wrong Email or password!";
			header("Location: LOGIN.php");
            die;
		}
 ?>