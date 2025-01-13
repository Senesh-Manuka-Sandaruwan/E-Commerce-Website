<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchy Sweet | Contact Us</title>

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
            <a href="contactus.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Contact
                Us</a>
        </nav>
        <div class="flex space-x-6">
            <img src="assets\user-fill.png" alt="User Icon" class="w-6 h-6">
            <img src="assets\shopping-cart-fill.png" alt="Cart Icon" class="w-6 h-6">
        </div>
    </header>


    <section class="relative w-full h-auto">
            <img src="assets/CONUS.jpg" alt="Background Image" class="w-full object-cover">
            <div class="absolute bottom-4 left-4">
                <h1 class="text-white text-xl md:text-9xl font-bold drop-shadow-lg">
                GET IN TOUCH
                </h1>
            </div>
        </section>


    <section class="px-8 py-12 max-w-7xl mx-auto grid grid-cols-2 gap-8">

        <div>
            <h2 class="text-2xl font-bold mb-4">Get In Touch Right Here</h2>
            <form class="space-y-4">
                <input type="text" placeholder="Your Name" class="w-full p-4 border border-gray-300 rounded">
                <input type="email" placeholder="E-Mail" class="w-full p-4 border border-gray-300 rounded">
                <input type="text" placeholder="Phone Number" class="w-full p-4 border border-gray-300 rounded">
                <textarea placeholder="Your Message..."
                    class="w-full p-4 border border-gray-300 rounded h-32"></textarea>
                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Send
                    Message</button>
            </form>
        </div>

        <div>
            <img src="assets/CONUS2.jpg" alt="Contact Us Image" class="w-full rounded">
        </div>
    </section>





    <!-- Footer Section -->
    <footer class="bg-amber-100 py-8 px-16 text-gray-700 mt-16">
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