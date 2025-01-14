
<head>
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
            <img src="../assets/logo.webp" alt="Crunchy Sweet Logo" class="w-16 rounded-full">
        </div>

        <nav class="flex items-center px-4 space-x-6">

            <div class="flex space-x-6">
                <a href="../controllers/cakeProductController.php"
                    class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Cakes
                    Products</a>
                <a href="../controllers/chocoProductController.php"
                    class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Chocolates
                    Products</a>
                <a href="../controllers/sweetsProductController.php"
                    class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Sweets
                    Products</a>
                <a href="../controllers/order.php"
                    class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">View
                    Orders</a>
            </div>
        </nav>

        <button class="text-white font-medium py-2 px-4 bg-amber-800 rounded hover:bg-amber-900 transition-colors">
            <a href="login.php">Log Out</a>
        </button>


    </header>

</body>