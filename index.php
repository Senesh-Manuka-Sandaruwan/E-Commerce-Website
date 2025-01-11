<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchy Sweet | Home</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./js/home.js" defer></script>
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

    <main class="">
        <section class="w-full h-auto">
            <img src="assets/homeBg.jpg" alt="backgruond Image" class="w-full object-cover">
        </section>

        <!-- Categories Section -->
        <section class="px-16 py-12">
            <!-- Cakes Section -->
            <h2 class="text-3xl font-bold mb-6 text-gray-700">Cakes</h2>
            <div class="flex items-center space-x-6">
                
                <div class="grid grid-cols-4 gap-20">
                    <div class="text-center">
                        <img src="assets/regular_cake_1.webp" alt="Regular Cakes"
                            class="w-64 h-64 rounded-lg shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                        <p class="mt-4 text-gray-600 font-medium">Regular cakes</p>
                    </div>
                    <div class="text-center">
                        <img src="assets/gourmet_cake_0.webp" alt="Gourmet Cakes"
                            class="w-64 h-64 rounded-lg shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                        <p class="mt-4 text-gray-600 font-medium">Gourmet cakes</p>
                    </div>
                    <div class="text-center">
                        <img src="assets/Coffee-Gateau.png" alt="Gateaux Cakes"
                            class="w-64 h-64 rounded-lg shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                        <p class="mt-4 text-gray-600 font-medium">Gateaux cakes</p>
                    </div>
                    <div class="text-center">
                        <img src="assets/normal-cakes.jpg" alt="Normal Cakes"
                            class="w-64 h-64 rounded-lg shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                        <p class="mt-4 text-gray-600 font-medium">Normal cakes</p>
                    </div>
                </div>
            </div>

            <!-- Sweets Section -->
            <h2 class="text-3xl font-bold mb-6 mt-16 text-gray-700">Sweets</h2>
            <div class="flex items-center justify-between">
                <button id="prevBtn" class="bg-gray-200 p-3 rounded-full text-gray-700"
                    onclick="changePage(-1)">&lt;</button>
                <div id="itemContainer" class="grid grid-cols-4 gap-6">
                </div>
                <button id="nextBtn" class="bg-gray-200 p-3 rounded-full text-gray-700"
                    onclick="changePage(1)">&gt;</button>
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
</body>

</html>
