<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchy Sweet | About</title>

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
    <main>


        <div class="relative bg-cover bg-center h-96 flex items-center justify-center text-white text-4xl font-bold"
            style="background-image: url('https://via.placeholder.com/1500x500');">
            ABOUT
        </div>

        <section class="px-8 py-12 max-w-7xl mx-auto">
            <p class="text-lg leading-relaxed">
                The realm of crunchy sweets is a delightful blend of sweet flavors and satisfying textures. This
                category encompasses a wide range of treats, from classic candies to innovative snacks. To thrive in
                this competitive market, entrepreneurs must prioritize product innovation, quality assurance, effective
                marketing, and strategic distribution. Experimenting with unique flavors, novel textures, and healthier
                alternatives can help differentiate products and attract a wider audience.
            </p>

            <p class="text-lg leading-relaxed mt-4">
                To ensure success, businesses must maintain strict hygiene standards, source high-quality ingredients,
                and implement rigorous quality control measures. Effective marketing strategies, including social media
                campaigns and influencer partnerships, can help build brand awareness and drive sales. Additionally,
                understanding consumer trends, embracing sustainable practices, and adapting to changing market
                conditions are crucial for long-term success in the crunchy sweets industry.
            </p>

            <img src="https://via.placeholder.com/800x400" alt="Bakery Items" class="w-full mt-6">
        </section>

        <section class="py-12 px-8">
            <h2 class="text-2xl font-bold mb-4">Food Safety Policy</h2>
            <p class="text-lg leading-relaxed">
                We at Crunchy Sweets (Pvt) Ltd, strive to be recognized as a manufacturing best quality cakes, gateaux,
                pastries, bakery products, ready to eat meals, beverages & providing outdoor catering services.
            </p>
            <p class="text-lg leading-relaxed mt-4">
                Food Safety Management System is implemented with the support of appropriate documentation and records.
                All identified hazards are controlled through the implementation of hygiene control operations and HACCP
                plans, conforming to statutory and regulatory requirements.
            </p>
        </section>

    </main>




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