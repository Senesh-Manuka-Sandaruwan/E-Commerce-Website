<?php
@include './../config/Database.php';

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
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin | Order Page</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>


    <?php include '../header.php'; ?>

    <?php

    $select = mysqli_query($conn, "SELECT * FROM cart");

    ?>
    <div class="container mx-auto p-4 mt-10">
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300 text-center">
                <thead>
                    <tr>
                        <th class="p-4 text-lg font-semibold text-white bg-gray-800">Product Image</th>
                        <th class="p-4 text-lg font-semibold text-white bg-gray-800">Product Name</th>
                        <th class="p-4 text-lg font-semibold text-white bg-gray-800">ProductPrice</th>
                        <th class="p-4 text-lg font-semibold text-white bg-gray-800">Quantity</th>
                        <th class="p-4 text-lg font-semibold text-white bg-gray-800">Amount</th>
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
                                    <img src="uploaded_img/<?php echo $fetch_cart['image']; ?>"
                                        class="h-24 mx-auto" alt="">
                                </td>
                                <td class="p-4 text-gray-700"><?php echo $fetch_cart['name']; ?></td>
                                <td class="p-4 text-gray-700">LKR.<?php echo number_format($price, 2); ?>/-</td>
                                <td class="p-4 text-gray-700"><?php echo $fetch_cart['quantity']; ?></td>
                                <td class="p-4 text-gray-700">
                                    LKR.<?php echo number_format($sub_total, 2); ?>/-
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>






                </tbody>
            </table>
        </div>
    </div>



</body>

</html>