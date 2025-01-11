<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchy Sweet | Login</title>

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
            <img src="assets\logo.webp" alt="Crunchy Sweet Logo" class="w-16 rounded-full">
        </div>
        <nav class="space-x-10">
            <a href="index.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Home</a>
            <a href="products.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Product</a>
            <a href="about.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">About</a>
            <a href="contact.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Contact
                Us</a>
        </nav>
        <div class="flex space-x-6">
            <img src="assets\user-fill.png" alt="User Icon" class="w-6 h-6">
            <img src="assets\shopping-cart-fill.png" alt="Cart Icon" class="w-6 h-6">
        </div>
    </header>

    <body>
        <main class="relative flex-1 flex justify-center items-center bg-cover bg-center w-full"
            style="background-image: url('https://img.freepik.com/premium-photo/round-crunchy-sweet-biscuits-with-candied-fruit-nuts_146935-510.jpg');">
            <div class="bg-white/40 p-20 rounded-lg shadow-lg max-w-md w-full mt-16 mb-16">
                <h1 class="text-center text-2xl font-bold mb-4">Welcome to CRUNCHY SWEETS</h1>
                <form action="login_process.php" method="POST" class="space-y-4">
                    <div>
                        <label for="email" class="block text-black font-bold ">Email address</label>
                        <input type="email" name="email" id="email" placeholder="Email"
                            class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring focus:ring-amber-300 outline-none"
                            required>
                    </div>
                    <div>
                        <label for="password" class="block text-black font-bold">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring focus:ring-amber-300 outline-none"
                            required>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <a href="#" class="text-black hover:underline font-bold">Forgotten Your Password?</a>
                        <a href="signup.php" class="text-black hover:underline font-bold">Sign up</a>
                    </div>
                    <button type="submit"
                        class="w-full bg-amber-500 text-white py-2 rounded-lg font-medium hover:bg-amber-600">Log
                        in</button>
                </form>
            </div>
        </main>



        <!-- Footer Section -->
        <footer class="bg-amber-100 py-8 px-16 text-gray-700">
            <div class="flex items-center justify-between">
                <div>
                    <img src="assets\logo.webp" alt="Logo" class="w-20 rounded-full">
                    <p class="mt-4">Show us some love & connect with us!</p>
                    <div class="flex space-x-6 mt-4">
                        <img src="assets\facebook-fill.png" alt="Facebook" class="w-6">
                        <img src="assets\instagram-fill.png" alt="Instagram" class="w-6">
                        <img src="assets\linkedin-fill.png" alt="LinkedIn" class="w-6">
                        <img src="assets\youtube-fill.png" alt="Utube" class="w-6">
                    </div>
                </div>
                <div>
                    <p>Crunchy Sweet (PVT) LTD,</p>
                    <p>16, Maharagama, Colombo, <br>Sri Lanka.</p>
                    <p>Phone: 0772517094</p>
                    <p>Email: crunchysweet@gmail.com</p>
                    <p class="text-sm mt-12">&copy; 2024 The crunchysweet All Rights Reserved.</p>
                </div>
            </div>
        </footer>
    </body>

</html>