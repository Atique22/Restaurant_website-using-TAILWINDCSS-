<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer</title>
    <link href="tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--bar-->
<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex order-first lg:order-none  title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Kashmir</span>
        </a>
        <div class="lg:w-4/5 inline-flex lg:justify-end ml-5 lg:ml-0">
       <a href="logout.php"> <button class="inline-flex items-center bg-green-300 border-0 py-1 px-3 focus:outline-none hover:bg-blue-200 rounded text-base mt-4 md:mt-0">Logout
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button></a>
                        <a href="Add_cart.php"> <img class="inline-flex ml-16  border-0  pl-1" src="./ajk_img/cart-icon.png"></a>
        </div>
    </div>
</header>
<hr>




<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">welcome to
                <br class="hidden lg:inline-block">Kashmir Restaurant
            </h1>
            <p class="mb-8 leading-relaxed">“Dear guests, you are welcomed to dine with us at Kashmir Food restaurant.
                We will serve you with the mouth watering dishes. Have a pleasant dining experience..”</p>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="./ajk_img/MIRPUR.jpg">
        </div>
    </div>
</section><hr>


<section class='text-gray-600 body-font'>
      <div class='container px-5 py-24 mx-auto'>
        <div class='flex flex-wrap -m-4'>
<?php
$con = mysqli_connect("localhost","root","","kashmir_r");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}

$result = mysqli_query($con,"SELECT * FROM `products`");
        while($row = mysqli_fetch_assoc($result)){
		    echo "
                <div class='lg:w-1/4 md:w-1/2 p-4 w-full'>
		               <div class='product_wrapper'>
        			  <form method='post' action='php_customer.php'>
        			  <input type='hidden' name='ID' value=".$row['ID']." />
        			  <div class='block relative h-48 rounded overflow-hidden'><img  class='object-cover object-center w-full h-full block' src='".$row['P_image']."' /></div>
        			  <input name = 'PNAME' class='text-gray-900 title-font text-lg font-medium' value ='$row[PNAME]'>
        			  <input name = 'P_PRICE' class='price' value= '$row[P_PRICE]'>
        			  <button type='submit' name = 'add_cart' class='inline-flex text-white bg-indigo-500 border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded text-lg'>Add To Cart</button>
        			  </form>
        		   	  </div>
                     </div> ";
        }
        mysqli_close($con);
?>
        </div>
      </div>
  </section>

<!--footer-->
<hr>
<footer class="text-gray-600 body-font ">

    <div class="bg-gray-100">
        <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">KASHMIR</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2022 ATIQUE AHMAD —
                <a href="https://twitter.com/AtiqueAhmadCh" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@AtiqueAhmadCh</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500" href="https://web.facebook.com/AtiqueCh987/">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500" href="https://twitter.com/AtiqueAhmadCh">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>

        <a class="ml-3 text-gray-500" href="https://t.co/UNREqxqXOQ">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
        </div>
    </div>
</footer>
</body>
</html>