
<?php
// Start session at the very beginning before any output
session_start();

// Define admin credentials
$admin_username = "admin";
$admin_password = "admin123";

// Initialize error message
$error_message = '';

// Check if form is submitted
if (isset($_POST['adminogin'])) {
    // Get and sanitize inputs
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    // Validate credentials
    if ($username === $admin_username && $password === $admin_password) {
        // Set session variables
        $_SESSION['Role'] = 'admin';
        $_SESSION['Username'] = $username;
        
        // Ensure no output has been sent before redirect
        if (!headers_sent()) {
            header("Location: cakeProductController.php");
            exit();
        } else {
            echo "<script>window.location.href = 'admin.php';</script>";
            exit();
        }
    } else {
        $error_message = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchy Sweet | Admin Login</title>

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
    </header>

    <main class="relative flex-1 flex justify-center items-center bg-cover bg-center w-full"
        style="background-image: url('https://img.freepik.com/premium-photo/round-crunchy-sweet-biscuits-with-candied-fruit-nuts_146935-510.jpg');">
        <div class="bg-white/40 p-10 rounded-lg shadow-lg max-w-md w-full mt-10 mb-10">
            <h1 class="text-center text-2xl font-bold mb-4"> Admin Login</h1>
            <?php
            if (isset($error_message)) {
                echo "<div class='text-red-500 text-center mb-4'>$error_message</div>";
            }
            ?>
            <form action="./controllers/cakeProductController.php" method="POST" class="space-y-4">
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




</body>