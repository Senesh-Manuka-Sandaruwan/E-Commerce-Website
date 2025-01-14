<?php

@include './config/Database.php';

if (isset($_POST['order_btn'])) {

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $country = $_POST['country'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if (mysqli_num_rows($cart_query) > 0) {
      while ($product_item = mysqli_fetch_assoc($cart_query)) {
         $product_name[] = $product_item['name'] . ' (' . $product_item['quantity'] . ') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      }
      ;
   }
   ;

   $total_product = implode(', ', $product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, address, city, country, total_products, total_price) VALUES('$name','$number','$email','$method','$address','$city','$country','$total_product','$price_total')") or die('query failed');

   if ($cart_query && $detail_query) {
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>" . $total_product . "</span>
            <span class='total'> total : $" . $price_total . "/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>" . $name . "</span> </p>
            <p> your number : <span>" . $number . "</span> </p>
            <p> your email : <span>" . $email . "</span> </p>
            <p> your address : <span>" . $address . "," . $city . ", " . $country . "</span> </p>
            <p> your payment mode : <span>" . $method . "</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='products.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdn.tailwindcss.com"></script>
   <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'amber': {
                            '50': '#fffbeb',
                            '100': '#fef3c7',
                            '200': '#fde68a',
                            '300': '#fcd34d',
                            '400': '#fbbf24',
                            '500': '#f59e0b',
                            '600': '#d97706',
                            '700': '#b45309',
                            '800': '#92400e',
                            '900': '#78350f',
                            '950': '#451a03',
                        },
                    },

                },

            },
        }

    </script>

</head>

<body class="bg-gray-50 font-sans">
   <header class="flex items-center justify-between px-16 py-3 bg-amber-100 shadow">
      <div>
         <img src="assets/logo.webp" alt="Crunchy Sweet Logo" class="w-16 rounded-full">
      </div>
      <nav class="space-x-10">
         <a href="index.php"
            class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Home</a>
         <div class="relative inline-block">
            <button id="dropdownButton"
               class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent flex justify-between items-center w-full">
               <span>All Product</span>
               <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
               </svg>
            </button>
            <div id="dropdownMenu" class="absolute hidden mt-2 bg-white rounded shadow-lg z-10 w-48">
               <a href="cakeProducts.php" class="block px-4 py-2 text-black hover:bg-amber-100 hover:text-black">Cakes
                  Products</a>
               <a href="sweetsProducts.php"
                  class="block px-4 py-2 text-black hover:bg-amber-100 hover:text-black">Sweets Products</a>
               <a href="chocoProducts.php"
                  class="block px-4 py-2 text-black hover:bg-amber-100 hover:text-black">Chocolate Products</a>
            </div>
         </div>
         <a href="about.php"
            class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">About</a>
         <a href="contactus.php"
            class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Contact
            Us</a>
      </nav>
      <div class="flex space-x-6">
         <a href="login.php"><img src="assets/user-fill.png" alt="User Icon" class="w-8 h-8"></a>
         <?php
         $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
         $row_count = mysqli_num_rows($select_rows);
         ?>
         <a href="cart.php"
            class="cart relative flex items-center space-x-2 text-2xl text-white hover:text-yellow-400 ml-8">
            <img src="assets/shopping-cart-fill.png" alt="Shopping Cart Icon" class="w-8 h-8" />
            <span
            class="absolute top-0 right-0 bg-amber-900 text-white text-xs font-semibold px-1 py-0.5 rounded-full"><?php echo $row_count; ?></span>
         </a>
      </div>
   </header>

   <div class="container mx-auto max-w-5xl p-4 bg-gray-300 mt-6">
      <section class="checkout-form">
         <h1 class="text-3xl font-bold text-center uppercase text-gray-800 mb-8">Complete Your Order</h1>

         <form action="" method="post" class="p-8 bg-gray-100 rounded-lg shadow-lg">
            <div
               class="display-order max-w-sm mx-auto mb-8 bg-white rounded-lg shadow-md text-center p-6 border border-gray-300">
               <?php
               $select_cart = mysqli_query($conn, "SELECT * FROM `cart`"); // Correct SQL query syntax
               $total = 0;
               $grand_total = 0;

               if (mysqli_num_rows($select_cart) > 0) {
                  while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                     // Convert price and quantity to numeric values
                     $price = (float) $fetch_cart['price'];
                     $quantity = (int) $fetch_cart['quantity'];

                     // Calculate total price for the current item
                     $total_price = $price * $quantity;

                     // Accumulate the grand total
                     $total += $total_price;
                     $grand_total = $total;
                     ?>
                     <span class="inline-block bg-gray-100 text-gray-800 rounded-lg px-4 py-2 mb-2">
                        <?= htmlspecialchars($fetch_cart['name']); ?> (<?= $quantity; ?>)
                     </span>
                     <?php
                  }
               } else {
                  echo "<div class='display-order'><span>Your cart is empty!</span></div>";
               }
               ?>
               <span class="grand-total block bg-amber-300 text-black rounded-lg px-6 py-4 mt-4 font-bold">
                  Grand Total: LKR.<?= $grand_total; ?>/-
               </span>
            </div>

            <div class="flex flex-wrap gap-6">
               <div class="inputBox flex-1 min-w-[250px]">
                  <label class="block text-lg font-medium text-gray-800 mb-2">Your Name</label>
                  <input type="text" placeholder="Enter your name" name="name" required
                     class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-amber-500">
               </div>
               <div class="inputBox flex-1 min-w-[250px]">
                  <label class="block text-lg font-medium text-gray-800 mb-2">Your Number</label>
                  <input type="number" placeholder="Enter your number" name="number" required
                     class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-amber-500">
               </div>
               <div class="inputBox flex-1 min-w-[250px]">
                  <label class="block text-lg font-medium text-gray-800 mb-2">Your Email</label>
                  <input type="email" placeholder="Enter your email" name="email" required
                     class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-amber-500">
               </div>
               <div class="inputBox flex-1 min-w-[250px]">
                  <label class="block text-lg font-medium text-gray-800 mb-2">Payment Method</label>
                  <select name="method"
                     class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-amber-500">
                     <option value="cash on delivery" selected>Cash on Delivery</option>
                     <option value="credit card">Credit Card</option>
                  </select>
               </div>
               <div class="inputBox flex-1 min-w-[250px]">
                  <label class="block text-lg font-medium text-gray-800 mb-2">Your Address</label>
                  <input type="text" placeholder="Address" name="street" required
                     class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-amber-500">
               </div>
               <div class="inputBox flex-1 min-w-[250px]">
                  <label class="block text-lg font-medium text-gray-800 mb-2">City</label>
                  <input type="text" placeholder="e.g. Colombo" name="city" required
                     class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-amber-500">
               </div>
               <div class="inputBox flex-1 min-w-[250px]">
                  <label class="block text-lg font-medium text-gray-800 mb-2">Country</label>
                  <input type="text" placeholder="e.g. Sri Lanka" name="country" required
                     class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-amber-500">
               </div>
            </div>
            <button type="submit" name="order_btn"
               class="w-full bg-amber-800 text-white font-bold text-lg rounded-lg p-4 mt-6 hover:bg-amber-900 focus:ring-2 focus:ring-amber-700">
               Order Now
            </button>
         </form>
      </section>
   </div>
   <!-- Footer Section -->
   <footer class="bg-amber-100 py-8 px-16 text-gray-700 mt-16">
      <div class="flex items-center justify-between">
         <div>
            <img src="assets/logo.webp" alt="Logo" class="w-20 rounded-full">
            <p class="mt-4">Show us some love & connect with us!</p>
            <div class="flex space-x-6 mt-4">
               <img src="assets/facebook-fill.png" alt="Facebook" class="w-6">
               <img src="assets/instagram-fill.png" alt="Instagram" class="w-6">
               <img src="assets/linkedin-fill.png" alt="LinkedIn" class="w-6">
               <img src="assets/youtube-fill.png" alt="Utube" class="w-6">
            </div>
         </div>
         <div>
            <p>Crunchy Sweet (PVT) LTD,</p>
            <p>16, Maharagama, Colombo, <br>Sri Lanka.</p>
            <p>Phone: 0772517094</p>
            <p>Email: crunchysweet@gmail.com</p>
            <p class="text-sm mt-12">&copy; 2024 The Crunchy Sweet All Rights Reserved.</p>
         </div>
      </div>
   </footer>

   <script>
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Close the dropdown if clicked outside
        window.addEventListener('click', (event) => {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>


   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>