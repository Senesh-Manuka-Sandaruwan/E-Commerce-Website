<?php
@include './config/Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $contactnumber = mysqli_real_escape_string($conn, $_POST['contactnumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $conformpassword = mysqli_real_escape_string($conn, $_POST['conformpassword']);

    // Check if passwords match
    if ($password !== $conformpassword) {
        echo "<script>
            alert('Passwords do not match!');
            window.history.back(); 
        </script>";
        exit;
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists
    $email_check = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($email_check) > 0) {
        echo "<script>
            alert('Email is already registered.');
            window.history.back(); 
        </script>";
        exit;
    }

    // Insert data into the database
    $query = "INSERT INTO users (firstname, lastname, contactnumber, email, password) 
              VALUES ('$firstname', '$lastname', '$contactnumber', '$email', '$hashed_password')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
        alert('Sign up successful. You can now log in.');
        window.location.href = 'login.php'; // Redirect to the login page
    </script>";
    } else {
        echo "<script>
        alert('Error: " . mysqli_error($conn) . "');
        window.history.back(); // Redirect back to the form
    </script>";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchy Sweet | Sign Up</title>

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
            <img src="assets/logo.webp" alt="Crunchy Sweet Logo" class="w-16 rounded-full">
        </div>
        <nav class="space-x-10">
            <a href="index.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Home</a>
            <a href="products.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Product</a>
            <a href="about.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">About</a>
            <a href="contact.php"
                class="text-gray-800 font-medium hover:text-black border-b-2 border-transparent hover:border-black">Contact Us</a>
        </nav>
        <div class="flex space-x-6">
            <img src="assets/user-fill.png" alt="User Icon" class="w-6 h-6">
            <img src="assets/shopping-cart-fill.png" alt="Cart Icon" class="w-6 h-6">
        </div>
    </header>

    <main class="relative flex-1 flex justify-center items-center bg-cover bg-center w-full"
        style="background-image: url('https://img.freepik.com/premium-photo/round-crunchy-sweet-biscuits-with-candied-fruit-nuts_146935-510.jpg');">
        <div class="bg-white/40 p-10 rounded-lg shadow-lg max-w-md w-full mt-10 mb-10">
            <h1 class="text-center text-2xl font-bold mb-4">Sign Up</h1>
            <form action="" method="POST" class="space-y-4">
                <div>
                    <label for="firstname" class="block text-black font-bold">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="First Name"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring focus:ring-amber-300 outline-none" required>
                </div>
                <div>
                    <label for="lastname" class="block text-black font-bold">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Last Name"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring focus:ring-amber-300 outline-none" required>
                </div>
                <div>
                    <label for="contactnumber" class="block text-black font-bold">Contact Number</label>
                    <input type="text" name="contactnumber" id="contactnumber" placeholder="Contact Number"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring focus:ring-amber-300 outline-none" required>
                </div>
                <div>
                    <label for="email" class="block text-black font-bold">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring focus:ring-amber-300 outline-none" required>
                </div>
                <div>
                    <label for="password" class="block text-black font-bold">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring focus:ring-amber-300 outline-none" required>
                </div>
                <div>
                    <label for="conformpassword" class="block text-black font-bold">Confirm Password</label>
                    <input type="password" name="conformpassword" id="conformpassword" placeholder="Confirm Password"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring focus:ring-amber-300 outline-none" required>
                </div>
                <div class="flex items-start">
                    <input type="checkbox" id="terms" name="terms" class="h-4 w-4 border-gray-300 rounded">
                    <label for="terms" class="ml-2 text-sm">
                        <a href="terms.html" target="_blank" class="text-black font-bold underline">I agree to the Terms and Conditions</a>
                    </label>
                </div>
                <button type="submit"
                    class="w-full bg-amber-500 text-white py-2 rounded-lg font-medium hover:bg-amber-600">Sign Up</button>
            </form>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-amber-100 py-8 px-16 text-gray-700">
        <div class="flex items-center justify-between">
            <div>
                <img src="assets/logo.webp" alt="Logo" class="w-20 rounded-full">
                <p class="mt-4">Show us some love & connect with us!</p>
                <div class="flex space-x-6 mt-4">
                    <img src="assets/facebook-fill.png" alt="Facebook" class="w-6">
                    <img src="assets/instagram-fill.png" alt="Instagram" class="w-6">
                    <img src="assets/linkedin-fill.png" alt="LinkedIn" class="w-6">
                    <img src="assets/youtube-fill.png" alt="YouTube" class="w-6">
                </div>
            </div>
            <div>
                <p>Crunchy Sweet (PVT) LTD,</p>
                <p>16, Maharagama, Colombo, <br>Sri Lanka.</p>
                <p>Phone: 0772517094</p>
                <p>Email: crunchysweet@gmail.com</p>
                <p class="text-sm mt-12">&copy; 2024 The Crunchysweet All Rights Reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>
