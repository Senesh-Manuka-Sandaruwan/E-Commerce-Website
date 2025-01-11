<?php
@include './../config/Database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cruchy Sweets | Checkout</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">


    <div class="container mx-auto px-4 py-8">

        <section class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Complete Your Order</h1>

            <form action="" method="post">

                <div class="bg-gray-50 p-4 rounded-md shadow-md mb-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-3">Your Order</h2>
                    <div class="flex flex-col gap-2">
                        <?php
                        @include './../config/Database.php';
                        $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                        $total = 0;
                        $grand_total = 0;
                        if (mysqli_num_rows($select_cart) > 0) {
                            while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                                $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
                                $grand_total = $total += $total_price;
                                ?>
                                <span class="block bg-gray-100 p-2 rounded-md text-gray-700"><?= $fetch_cart['name']; ?>
                                    (<?= $fetch_cart['quantity']; ?>)</span>
                                <?php
                            }
                        } else {
                            echo "<span class='text-gray-600'>Your cart is empty!</span>";
                        }
                        ?>
                        <span class="block text-lg font-bold text-red-600 mt-3">Grand Total:
                            $<?= $grand_total; ?>/-</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="block text-gray-700 font-medium">Your Name</label>
                        <input type="text" placeholder="Enter your name" name="name" required
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-gray-700 font-medium">Your Number</label>
                        <input type="number" placeholder="Enter your number" name="number" required
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-gray-700 font-medium">Your Email</label>
                        <input type="email" placeholder="Enter your email" name="email" required
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-gray-700 font-medium">Payment Method</label>
                        <select name="method"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="cash on delivery" selected>Cash on Delivery</option>
                            <option value="credit card">Credit Card</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-gray-700 font-medium">Address Line 1</label>
                        <input type="text" placeholder="e.g. flat no." name="flat" required
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-gray-700 font-medium">Address Line 2</label>
                        <input type="text" placeholder="e.g. street name" name="street" required
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-gray-700 font-medium">City</label>
                        <input type="text" placeholder="e.g. Mumbai" name="city" required
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-gray-700 font-medium">State</label>
                        <input type="text" placeholder="e.g. Maharashtra" name="state" required
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-gray-700 font-medium">Country</label>
                        <input type="text" placeholder="e.g. India" name="country" required
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-gray-700 font-medium">Pin Code</label>
                        <input type="text" placeholder="e.g. 123456" name="pin_code" required
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <button type="submit" name="order_btn"
                    class="w-full mt-6 bg-blue-500 text-white font-semibold py-3 rounded-lg hover:bg-blue-600">Order
                    Now</button>

            </form>
        </section>

    </div>

</body>

</html>