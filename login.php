<?php
@include './config/Database.php';

// Handle login process
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        // Check if the password matches
        if (password_verify($password, $user['password'])) {
            // Set session variables for logged in user
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            // Redirect to the homepage or dashboard based on user role
            if ($user['role'] == 'admin') {
                header("Location: controllers/cakeProductController.php"); // Admin page
            } else {
                header("Location: checkout.php"); // Regular user homepage
            }
        } else {
            $error_message = "Invalid password.";
        }
    } else {
        $error_message = "Email not found.";
    }
}
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
            <a href="contact.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Contact
                Us</a>
        </nav>
        <div class="flex space-x-6">
            <a href="login.php"><img src="assets\user-fill.png" alt="User Icon" class="w-8 h-8"></a>
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

    <main class="relative flex-1 flex justify-center items-center bg-cover bg-center w-full"
        style="background-image: url('https://img.freepik.com/premium-photo/round-crunchy-sweet-biscuits-with-candied-fruit-nuts_146935-510.jpg');">
        <div class="bg-white/40 p-10 rounded-lg shadow-lg max-w-md w-full mt-10 mb-10">
            <h1 class="text-center text-2xl font-bold mb-4">Login</h1>
            <?php
            if (isset($error_message)) {
                echo "<div class='text-red-500 text-center mb-4'>$error_message</div>";
            }
            ?>
            <form action="login.php" method="POST" class="space-y-4">
                <div>
                    <label for="email" class="block text-black font-bold">Email</label>
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
                <button type="submit" name="login"
                    class="w-full bg-amber-500 text-white py-2 rounded-lg font-medium hover:bg-amber-600">Login</button>
            </form>
            <div class="mt-4 text-center">
                <p>Don't have an account? <a href="signup.php" class="text-amber-800 font-bold">Sign Up</a></p>
            </div>
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