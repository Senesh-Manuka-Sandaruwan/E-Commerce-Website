<?php

@include './config/Database.php';

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['sub_product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

    if (mysqli_num_rows($select_cart) > 0) {
        // $message[] = 'Product already added to cart';
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
    <title>Crunchy Sweet | Chocolate Product</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./js/home.js" defer></script>
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
                    <a href="cakeProducts.php"
                        class="block px-4 py-2 text-black hover:bg-amber-100 hover:text-black">Cakes Products</a>
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
            <img href="login.php" src="assets/user-fill.png" alt="User Icon" class="w-8 h-8">
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

    <main>
        <?php if (isset($message)) { ?>
            <div id="alert-container" class="fixed top-5 right-5 z-50 space-y-4">
                <?php foreach ($message as $msg) { ?>
                    <div class="bg-green-500 text-white px-4 py-2 rounded shadow-lg flex items-center justify-between max-w-md opacity-100 animate-fadeIn"
                        data-disappear>
                        <span><?php echo htmlspecialchars($msg); ?></span>
                        <i class="fas fa-times cursor-pointer ml-4" onclick="this.parentElement.style.display = 'none';"></i>
                    </div>
                <?php } ?>
            </div>

            <script>

                document.addEventListener('DOMContentLoaded', () => {
                    const messages = document.querySelectorAll('[data-disappear]');
                    messages.forEach((msg) => {
                        setTimeout(() => {
                            msg.classList.add('animate-slideOut'); // Add slide-out animation
                            setTimeout(() => {
                                msg.remove(); // Remove the element after animation ends
                            }, 500); // Wait for the slide-out duration
                        }, 2500); // Visible for 2.5 seconds
                    });
                });
            </script>
        <?php } ?>
        <div class="bg-gray-100 py-10">
            <div class="max-w-screen-xl mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-center gap-8">
                <!-- Left Side: Image -->
                <div class="w-full lg:w-1/2">
                    <img src="assets/choco.jpg" alt="Descriptive Image"
                        class="w-full h-auto rounded-lg shadow-lg">
                </div>

                <!-- Right Side: Paragraph -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Our Chocolate Shop</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Indulge in the finest handmade chocolates crafted with passion and care.
                        Our collection includes a variety of delightful flavors and exquisite designs, perfect for any
                        occasion.
                        Whether you're treating yourself or gifting a loved one, our chocolates promise to deliver an
                        unforgettable experience.
                    </p>
                    <p class="text-gray-700 leading-relaxed mt-4">
                        Explore our range of premium chocolates and let your taste buds embark on a journey of pure
                        delight.
                        Quality and satisfaction are at the heart of everything we do.
                    </p>
                </div>
            </div>
        </div>


        <div class="max-w-screen-xl mx-auto">

            <section class="products py-10 space-y-10">
                <?php
                // Fetch unique product names
                $select_product_names = mysqli_query($conn, "SELECT DISTINCT `product_name` FROM `chocolateproducts`");
                if (mysqli_num_rows($select_product_names) > 0) {
                    while ($product_name_row = mysqli_fetch_assoc($select_product_names)) {
                        $product_name = $product_name_row['product_name'];
                        ?>

                        <!-- Product Name as Topic -->
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-6"><?php echo $product_name; ?></h2>

                            <!-- Fetch and Display Forms Below the Topic -->
                            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
                                <?php
                                $select_products = mysqli_query($conn, "SELECT * FROM `chocolateproducts` WHERE `product_name` = '$product_name'");
                                if (mysqli_num_rows($select_products) > 0) {
                                    while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                                        ?>

                                        <form action="" method="post"
                                            class="bg-white shadow-md border border-gray-300 rounded-lg p-6 text-center">
                                            <div class="box">
                                                <img src="./controllers/uploaded_img/<?php echo htmlspecialchars($fetch_product['product_image']); ?>"
                                                    alt="Product Image" class="w-full h-64 object-cover rounded-md mb-4">
                                                <h3 class="text-s font-thinbold text-gray-800 mb-2">
                                                    <?php echo $fetch_product['sub_product_name']; ?>
                                                </h3>
                                                <div class="text-lg font-bold text-gray-900 mb-4">
                                                    LKR.<?php echo $fetch_product['product_price']; ?>/-</div>
                                                <input type="hidden" name="sub_product_name"
                                                    value="<?php echo $fetch_product['sub_product_name']; ?>">
                                                <input type="hidden" name="product_price"
                                                    value="<?php echo $fetch_product['product_price']; ?>">
                                                <input type="hidden" name="product_image"
                                                    value="<?php echo $fetch_product['product_image']; ?>">
                                                <input type="submit"
                                                    class="bg-amber-800 text-white px-6 py-2 rounded hover:bg-amber-900 transition-colors cursor-pointer"
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