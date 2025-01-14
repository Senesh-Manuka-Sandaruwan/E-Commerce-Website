<?php
@include './config/Database.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchy Sweet | Home</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/home.js" defer></script>
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

    <main class="">
        <section class="w-full h-auto">
            <img src="assets/homebg.jpg" alt="backgruond Image" class="w-full object-cover">
        </section>

        <!-- Categories Section -->
        <section class="px-16 py-12">
            <!-- Cakes Section -->
            <h2 class="text-3xl font-bold mb-6 text-gray-700">Cakes</h2>
            <div class="flex items-center space-x-6">

                <div class="grid grid-cols-4 gap-20">
                    <div class="text-center">
                        <a href="cakeProducts.php"><img src="assets/regular_cake_1.webp" alt="Regular Cakes"
                                class="w-64 h-64 rounded-lg shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"></a>
                        <p class="mt-4 text-gray-600 font-medium">Regular cakes</p>
                    </div>
                    <div class="text-center">
                        <a href="cakeProducts.php"><img src="assets/gourmet_cake_0.webp" alt="Gourmet Cakes"
                                class="w-64 h-64 rounded-lg shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"></a>
                        <p class="mt-4 text-gray-600 font-medium">Gourmet cakes</p>
                    </div>
                    <div class="text-center">
                        <a href="cakeProducts.php"><img src="assets/Coffee-Gateau.png" alt="Gateaux Cakes"
                                class="w-64 h-64 rounded-lg shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"></a>
                        <p class="mt-4 text-gray-600 font-medium">Gateaux cakes</p>
                    </div>
                    <div class="text-center">
                        <a href="cakeProducts.php"><img src="assets/normal-cakes.jpg" alt="Normal Cakes"
                                class="w-64 h-64 rounded-lg shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"></a>
                        <p class="mt-4 text-gray-600 font-medium">Normal cakes</p>
                    </div>
                </div>
            </div>
            <!-- Sweets Section -->
            <h2 class="text-3xl font-bold mb-6 mt-16 text-gray-700">Sweets</h2>
            <div class="flex items-center justify-between">
                <button id="prevBtn" class="bg-gray-200 p-3 rounded-full text-gray-700"
                    onclick="changePage(-1, 'sweets')">&lt;</button>
                <div id="itemContainerSweets" class="grid grid-cols-4 gap-6"></div>
                <button id="nextBtn" class="bg-gray-200 p-3 rounded-full text-gray-700"
                    onclick="changePage(1, 'sweets')">&gt;</button>
            </div>

            <!-- Chocolates Section -->
            <h2 class="text-3xl font-bold mb-6 mt-16 text-gray-700">Chocolates</h2>
            <div class="flex items-center justify-between">
                <button id="prevBtnChocolate" class="bg-gray-200 p-3 rounded-full text-gray-700"
                    onclick="changePage(-1, 'chocolate')">&lt;</button>
                <div id="itemContainerChocolate" class="grid grid-cols-4 gap-6"></div>
                <button id="nextBtnChocolate" class="bg-gray-200 p-3 rounded-full text-gray-700"
                    onclick="changePage(1, 'chocolate')">&gt;</button>
            </div>

        </section>
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