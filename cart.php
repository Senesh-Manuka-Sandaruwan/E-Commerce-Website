<?php

@include './config/Database.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
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
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

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
                            <img src="./controllers/uploaded_img/<?php echo $fetch_cart['image']; ?>" class="h-24 mx-auto" alt="">
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
                            $<?php echo number_format($sub_total, 2); ?>/-
                        </td>
                        <td class="p-4">
                            <a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>"
                                onclick="return confirm('Remove item from cart?')" class="text-red-600 hover:underline">Remove</a>
                        </td>
                    </tr>
                    <?php
                    $grand_total += $sub_total; 
                }
            }
            ?>
    
            <tr class="bg-gray-100">
                <td class="p-4">
                    <a href="sweetsProducts.php" class="text-green-500 hover:underline">Continue Shopping</a>
                </td>
                <td colspan="3" class="p-4 text-right font-semibold">Grand Total</td>
                <td class="p-4 text-gray-700 font-bold">$<?php echo $grand_total; ?>/-</td>
                <td class="p-4">
                    <a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?')"
                        class="text-red-600 hover:underline">Delete All</a>
                </td>
            </tr>
         </tbody>
      </table>

      <div class="text-center mt-8">
         <a href="checkout.php"
            class="px-6 py-3 bg-green-500 text-white rounded shadow-md hover:bg-green-600 disabled:opacity-50 <?= ($grand_total > 1)?'':'disabled'; ?>">
            Proceed to Checkout
         </a>
      </div>
   </section>
</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>