<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager</title>
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
        <!--        NAVBAR    -->
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" >
            <a href="./HOME.html" target="_self" class="mr-5 hover:text-black">Home</a>
            <a href="./About.html" target="_blank" class="mr-5 hover:text-black">About</a>
            <a href="./services.php"  target="_blank" class="mr-5 hover:text-black">Service</a>
            <a href="./Contact.html"  target="_blank" class="mr-5 hover:text-black">Contact</a>
        </nav>


        <a href="manager.html">    <button  class = "items-center bg-green-200 border-0 py-1 px-6 mx-2 focus:outline-none hover:bg-green-400 rounded text-base mt-4 md:mt-0">Go to back
        </button></a>
    </div>

</header>
<hr>

<hr>
<!--under manger-->
<section class="text-gray-600 body-font"  style="background-color: black; border-radius: 10px; margin: 80px">
    <div class="container px-5 py-24 mx-auto" >
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Order Detail</h1>
        </div>
        <div class="lg:w-3/3 w-full mx-auto overflow-auto" style="background-color: white">
            <table class="table-auto w-full text-left whitespace-no-wrap" >
                <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Order id.</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Customer Name</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Customer Phone</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Customer Email</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Products Name</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Products Price</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Products Quantity</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Total Price</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Status</th>

                </tr>
                </thead>
            <tbody>
        <?php
                      $con = mysqli_connect("localhost","root","","kashmir_r");
        	          if (mysqli_connect_errno()){
        		          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        		          die();
        		      }
                $result = mysqli_query($con,"SELECT * FROM `order`");
                while($row = mysqli_fetch_assoc($result)){
                ?>
        		        <tr>
                                <td><?php echo $row['Order id']?>  </td>
                                <td><?php echo $row['Customer Name']?>    </td>
                                <td><?php echo $row['Customer Phone']?>   </td>
                                <td><?php echo $row['Customer Email']?> </td>
                                <td><?php echo $row['Products Name']?> </td>
                                <td><?php echo $row['Products Price']?>    </td>
                                <td><?php echo $row['Products Quantity']?>   </td>
                                <td><?php echo $row['Total Price']?> </td>
                                <td><?php echo "STATUS"; ?> </td>
                        </tr>

                <?php
                    }
                ?>

                </tbody>
            </table>
        </div>


</section>

<!--view-->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/2 w-full">
                <div class="h-full bg-gray-100 p-8 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="leading-relaxed mb-6">Every other beauty simply vanishes or feels less when you once see how beautiful Kashmir is. The valley, the mountains and the river – everything about the stunning land continue to elevate its beauty at all the junctions throwing new surprises.</p>
                    <a class="inline-flex items-center">
                        <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                        <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Akif Ajaz</span>
              <span class="text-gray-500 text-sm">UI DEVELOPER</span>
            </span>
                    </a>
                </div>
            </div>
            <div class="p-4 md:w-1/2 w-full">
                <div class="h-full bg-gray-100 p-8 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="leading-relaxed mb-6">Every other beauty simply vanishes or feels less when you once see how beautiful Kashmir is. The valley, the mountains and the river – everything about the stunning land continue to elevate its beauty at all the junctions throwing new surprises.</p>
                    <a class="inline-flex items-center">
                        <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                        <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Samar Azhar</span>
              <span class="text-gray-500 text-sm">DESIGNER</span>
            </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--viewer-->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4 text-center">
            <div class="p-4 sm:w-1/4 w-1/2">
                <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">2.7K</h2>
                <p class="leading-relaxed">Users</p>
            </div>
            <div class="p-4 sm:w-1/4 w-1/2">
                <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">1.8K</h2>
                <p class="leading-relaxed">Subscribes</p>
            </div>
            <div class="p-4 sm:w-1/4 w-1/2">
                <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">35</h2>
                <p class="leading-relaxed">Downloads</p>
            </div>
            <div class="p-4 sm:w-1/4 w-1/2">
                <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">4</h2>
                <p class="leading-relaxed">Products</p>
            </div>
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