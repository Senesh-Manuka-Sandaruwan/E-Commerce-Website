<?php

@include './config/Database.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $country = $_POST['country'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, address, city, country, total_products, total_price) VALUES('$name','$number','$email','$method','$address','$city','$country','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your address : <span>".$address.",".$city.", ".$country."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
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

</head>
<body>

<div class="container mx-auto max-w-5xl p-4">
   <section class="checkout-form">
      <h1 class="text-3xl font-bold text-center uppercase text-gray-800 mb-8">Complete Your Order</h1>

      <form action="" method="post" class="p-8 bg-gray-100 rounded-lg shadow-lg">
         <div class="display-order max-w-sm mx-auto mb-8 bg-white rounded-lg shadow-md text-center p-6 border border-gray-300">
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
                    <span class="grand-total block bg-red-500 text-white rounded-lg px-6 py-4 mt-4 font-bold">
                        Grand Total: LKR.<?= $grand_total; ?>/-
                    </span>
                </div>

                <div class="flex flex-wrap gap-6">
                    <div class="inputBox flex-1 min-w-[250px]">
                        <label class="block text-lg font-medium text-gray-800 mb-2">Your Name</label>
                        <input type="text" placeholder="Enter your name" name="name" required
                            class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-green-500">
                    </div>
                    <div class="inputBox flex-1 min-w-[250px]">
                        <label class="block text-lg font-medium text-gray-800 mb-2">Your Number</label>
                        <input type="number" placeholder="Enter your number" name="number" required
                            class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-green-500">
                    </div>
                    <div class="inputBox flex-1 min-w-[250px]">
                        <label class="block text-lg font-medium text-gray-800 mb-2">Your Email</label>
                        <input type="email" placeholder="Enter your email" name="email" required
                            class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-green-500">
                    </div>
            <div class="inputBox flex-1 min-w-[250px]">
               <label class="block text-lg font-medium text-gray-800 mb-2">Payment Method</label>
               <select name="method" class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-green-500">
                  <option value="cash on delivery" selected>Cash on Delivery</option>
                  <option value="credit card">Credit Card</option>
               </select>
            </div>
            <div class="inputBox flex-1 min-w-[250px]">
               <label class="block text-lg font-medium text-gray-800 mb-2">Your Address</label>
               <input type="text" placeholder="Address" name="street" required
                  class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-green-500">
            </div>
            <div class="inputBox flex-1 min-w-[250px]">
               <label class="block text-lg font-medium text-gray-800 mb-2">City</label>
               <input type="text" placeholder="e.g. Colombo" name="city" required
                  class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-green-500">
            </div>
            <div class="inputBox flex-1 min-w-[250px]">
               <label class="block text-lg font-medium text-gray-800 mb-2">Country</label>
               <input type="text" placeholder="e.g. Sri Lanka" name="country" required
                  class="w-full border border-gray-300 rounded-lg p-3 text-lg text-gray-800 focus:ring-2 focus:ring-green-500">
            </div>
         </div>
         <button type="submit" name="order_btn" 
            class="w-full bg-green-500 text-white font-bold text-lg rounded-lg p-4 mt-6 hover:bg-green-600 focus:ring-2 focus:ring-green-700">
            Order Now
         </button>
      </form>
   </section>
</div>


<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>