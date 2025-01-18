<?php

@include './config/Database.php';

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    $login_url = 'login.php'; // Define the login page URL
} else {
    $checkout_url = 'checkout.php'; // Define the checkout page URL
}


if (isset($_POST['update_update_btn'])) {
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if ($update_quantity_query) {
      header('location:cart.php');
   }
   ;
}
;

if (isset($_GET['remove'])) {
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
}
;

if (isset($_GET['delete_all'])) {
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Crunchy Sweet | Shopping Cart</title>

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

   <div class="container mx-auto p-4">
      <section class="shopping-cart">
         <h1 class="text-3xl font-bold text-center uppercase mb-8 text-gray-800">Shopping Cart</h1>

         <table class="table-auto w-full text-center border-collapse">
            <thead>
               <tr>
                  <th class="p-4 text-lg font-semibold text-white bg-gray-800">Image</th>
                  <th class="p-4 text-lg font-semibold text-white bg-gray-800">Name</th>
                  <th class="p-4 text-lg font-semibold text-white bg-gray-800">Price</th>
                  <th class="p-4 text-lg font-semibold text-white bg-gray-800">Quantity</th>
                  <th class="p-4 text-lg font-semibold text-white bg-gray-800">Total Price</th>
                  <th class="p-4 text-lg font-semibold text-white bg-gray-800">Action</th>
               </tr>
            </thead>

            <tbody>
               <?php
               $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
               $grand_total = 0;

               if (mysqli_num_rows($select_cart) > 0) {
                  while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                     $price = (float) $fetch_cart['price'];
                     $quantity = (int) $fetch_cart['quantity'];
                     $sub_total = $price * $quantity;
                     ?>
                     <tr class="border-b border-gray-300">
                        <td class="p-4">
                           <img src="./controllers/uploaded_img/<?php echo $fetch_cart['image']; ?>" class="h-24 mx-auto"
                              alt="">
                        </td>
                        <td class="p-4 text-gray-700"><?php echo $fetch_cart['name']; ?></td>
                        <td class="p-4 text-gray-700">LKR.<?php echo number_format($price, 2); ?>/-</td>
                        <td class="p-4">
                           <form action="" method="post" class="flex justify-center items-center gap-2">
                              <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?>">
                              <input type="number" name="update_quantity" min="1" value="<?php echo $quantity; ?>"
                                 class="w-20 p-2 border border-gray-300 rounded focus:ring-2 focus:ring-green-400">
                              <input type="submit" value="Update" name="update_update_btn"
                                 class="px-4 py-2 bg-green-500 text-white rounded cursor-pointer hover:bg-green-600">
                           </form>
                        </td>
                        <td class="p-4 text-gray-700">
                           LKR.<?php echo number_format($sub_total, 2); ?>/-
                        </td>
                        <td class="p-4">
                           <a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>"
                              onclick="return confirm('Remove item from cart?')"
                              class="text-red-600 hover:underline">Remove</a>
                        </td>
                     </tr>
                     <?php
                     $grand_total += $sub_total;
                  }
               }
               ?>

               <tr class="bg-gray-100">
                  <td class="p-4 flex space-x-2">
                     <h1 class="text-black font-bold">Continue Shopping</h1>
                     <a href="cakeProducts.php"
                        class="bg-amber-200 text-black py-2 px-4 rounded hover:bg-amber-300">Cakes</a>
                     <a href="chocoProducts.php"
                        class="bg-amber-200 text-black py-2 px-4 rounded hover:bg-amber-300">Chocolates</a>
                     <a href="sweetsProducts.php"
                        class="bg-amber-200 text-black py-2 px-4 rounded hover:bg-amber-300">Sweets</a>
                  </td>

                  <td colspan="3" class="p-4 text-right font-semibold">Grand Total</td>
                  <td class="p-4 text-gray-700 font-bold">LKR.<?php echo $grand_total; ?>/-</td>
                  <td class="p-4">
                     <a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?')"
                        class="text-red-600 hover:underline">Delete All</a>
                  </td>
               </tr>
            </tbody>
         </table>

         <div class="text-center mt-8">
            <a href="login.php?redirect=checkout.php"
               class="px-6 py-3 bg-amber-800 text-white rounded shadow-md hover:bg-amber-900 disabled:opacity-50 <?= ($grand_total > 1) ? '' : 'disabled'; ?>">
               Proceed to Checkout
            </a>
         </div>
      </section>
   </div>


   <!-- Footer Section -->
   <footer class="bg-amber-100 py-8 px-16 text-gray-700 mt-[6%]">
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

</body>

</html>