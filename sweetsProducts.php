<?php

@include './config/Database.php';

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

    if (mysqli_num_rows($select_cart) > 0) {
        $message[] = 'Product already added to cart';
    } else {
        $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
        $message[] = 'Product added to cart successfully';
    }

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchy Sweet | Product</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./js/home.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>

    </style>
</head>

<body class="bg-gray-50 font-sans">

    <header class="flex items-center justify-between px-16 py-3 bg-amber-100 shadow">
        <div>
            <img src="assets/logo.webp" alt="Crunchy Sweet Logo" class="w-16 rounded-full">
        </div>
        <nav class="space-x-10">
            <a href="index.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Home</a>
            <a href="products.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Product</a>
            <a href="about.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">About</a>
            <a href="contactus.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Contact
                Us</a>
        </nav>
        <div class="flex space-x-6">
            <img src="assets/user-fill.png" alt="User Icon" class="w-6 h-6">
            <img src="assets/shopping-cart-fill.png" alt="Cart Icon" class="w-6 h-6">
        </div>
    </header>

    <main>
        <?php

        if (isset($message)) {
            foreach ($message as $message) {
                echo '<div class="bg-green-500 text-white px-4 py-2 rounded shadow-lg mb-4 flex items-center justify-between max-w-md mx-auto">
               <span>' . $message . '</span>
               <i class="fas fa-times cursor-pointer" onclick="this.parentElement.style.display = `none`;"></i>
            </div>';
            }
            ;
        }
        ;

        ?>
        <div class="bg-gray-100 py-10">
            <div class="max-w-screen-xl mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-center gap-8">
                <!-- Left Side: Image -->
                <div class="w-full lg:w-1/2">
                    <img src="assets\thumb-1920-2957.jpg" alt="Descriptive Image"
                        class="w-full h-auto rounded-lg shadow-lg">
                </div>

                <!-- Right Side: Paragraph -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Our Sweets Shop</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Delight in the irresistible charm of our handcrafted sweets, made with love and the finest
                        ingredients. Each piece is a blend of tradition and innovation, delivering a burst of flavor
                        that’s sure to satisfy your sweet cravings.
                    </p>
                    <p class="text-gray-700 leading-relaxed mt-4">
                        Whether you’re celebrating a special occasion or simply indulging in a little treat, our
                        collection of sweets promises to make every moment sweeter. Discover the magic of our creations
                        and add a touch of sweetness to your day!
                    </p>
                </div>
            </div>
        </div>


        <div class="max-w-screen-xl mx-auto">

            <section class="products py-10 space-y-10">
                <?php
                // Fetch unique product names
                $select_product_names = mysqli_query($conn, "SELECT DISTINCT `product_name` FROM `sweetsproducts`");
                if (mysqli_num_rows($select_product_names) > 0) {
                    while ($product_name_row = mysqli_fetch_assoc($select_product_names)) {
                        $product_name = $product_name_row['product_name'];
                        ?>

                        <!-- Product Name as Topic -->
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-6"><?php echo $product_name; ?></h2>

                            <!-- Fetch and Display Forms Below the Topic -->
                            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
                                <?php
                                $select_products = mysqli_query($conn, "SELECT * FROM `sweetsproducts` WHERE `product_name` = '$product_name'");
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                                        ?>

                                        <form action="" method="post"
                                            class="bg-white shadow-md border border-gray-300 rounded-lg p-6 text-center">
                                            <div class="box">
                                                <img src="./controllers/uploaded_img/<?php echo htmlspecialchars($fetch_product['product_image']); ?>"
                                                    alt="Product Image" class="w-full h-64 object-cover rounded-md mb-4">
                                                <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                                    <?php echo $fetch_product['sub_product_name']; ?>
                                                </h3>
                                                <div class="text-lg font-bold text-gray-900 mb-4">
                                                    LKR.<?php echo $fetch_product['product_price']; ?>/-</div>
                                                <input type="hidden" name="product_name"
                                                    value="<?php echo $fetch_product['product_name']; ?>">
                                                <input type="hidden" name="product_price"
                                                    value="<?php echo $fetch_product['product_price']; ?>">
                                                <input type="hidden" name="product_image"
                                                    value="<?php echo $fetch_product['product_image']; ?>">
                                                <input type="submit"
                                                    class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition-colors cursor-pointer"
                                                    value="Add to Cart" name="add_to_cart">
                                            </div>
                                        </form>

                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <?php
                    }
                }
                ?>
            </section>

        </div>


    </main>

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
</body>

</html>