
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add to cart</title>
    <link href="tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body style="  background-image: url('./ajk_img/img1 (8).jpg'); /* Full height */height: 100%;background-position: center;background-repeat: no-repeat;
  background-size: cover;">

<!--HEADER-->
<header class="text-gray-600 body-font" style="background-color: aliceblue">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="./HOME.html" target="_self" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl" >KASHMIR</span>
        </a>
<!--        NAVBAR-->
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" >
            <a href="./HOME.html" target="_self" class="mr-5 hover:text-black">Home</a>
            <a href="./About.html" target="_self" class="mr-5 hover:text-black">About</a>
            <a href="./customer.php"  target="_self" class="mr-5 hover:text-black">Service</a>
            <a href="./Contact.html"  target="_self" class="mr-5 hover:text-black">Contact</a>
        </nav>
<!--     SIGN IN   BUTTON-->
        <a href="./customer.php"  target=""><button class="inline-flex items-center bg-green-200 border-0 py-2 px-6 mx-2 focus:outline-none hover:bg-green-400 rounded text-base mt-4 md:mt-0">Go to back</button></a>
    </div>
</header>

<section class="text-gray-600 body-font" >
    <div class="container px-5 py-24 mx-auto" >
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Shopping Cart</h1>
        </div>
        <div class="lg:w-3/3 w-full mx-auto overflow-auto" style="background-color: white">
            <table class="table-auto w-full text-left whitespace-no-wrap" >
                <thead>
                     <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Index no.</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Product Name</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Product Price</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Product Quantity</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Total Price</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Update</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                 session_start();
                 $total =0;
                 if($_SESSION['cart']) {
                 	foreach($_SESSION['cart'] as $key => $value) {
                 	$ptotal = $value['ProductPrice']*$value['ProductQuantity'];
                 	$select1 = $value['ProductQuantity'] == 1 ? 'selected' : '';
                 	$select2 = $value['ProductQuantity'] == 2 ? 'selected' : '';
                 	$select3 = $value['ProductQuantity'] == 3 ? 'selected' : '';
                 	$select4 = $value['ProductQuantity'] == 4 ? 'selected' : '';
                 		echo "
                 		<form action ='php_customer.php' method = 'POST'>
                            <tr>
                               <td class='px-4 py-3'>$key</td>
                               <td class='px-4 py-3'><input name='PNAME' type='hidden' value='$value[ProductName]'>$value[ProductName]</td>
                               <td class='px-4 py-3'><input name='P_PRICE' type='hidden' value='$value[ProductPrice]'>$value[ProductPrice]</td>
                               <td class='px-4 py-3'><select name='P_Quantity' value='change'>
                               <option ".$select1. " value='1'>1</option>
                               <option ".$select2. " value='2'>2</option>
                               <option ".$select3. " value='3'>3</option>
                               <option ".$select4. " value='4'>4</option>
                               </select>
                               </td>
                               <td name = 'ptotal' class='px-4 py-3'>$ptotal</td>
                               <td class='px-4 py-3'><button name='update' class ='btn-warning'>Update</button></td>
                               <td class='px-4 py-3'><button name ='remove' class ='btn-danger'>Delete</button></td>
                               <td class='px-4 py-3'><input type ='hidden' name= 'item' value ='$value[ProductName]'></td>
                            </tr>
                        </form>
                 		";

                 	   $total += $value['ProductPrice']*$value['ProductQuantity'];
                 		}
                 }

       ?>

                </tbody>

            </table>
        <?php    echo " <td>Total Price: $total </td>"; ?>
        </div>
        <form action="php_customer.php" method="post">
        <div class="flex pl-4 mt-4 lg:w-3/3 w-full mx-auto">
            <button id= "place_order" name= "place_order" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"  onclick="place_order()" >Place Order</button>
        </div>
         </form>


</section>
</body>
</html>