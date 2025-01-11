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

         <!-- Add to Cart Section -->
    <main class="container mx-auto px-4 py-8">
        <div class="bg-white p-6 shadow-lg rounded-lg">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Product Image -->
                <div class="flex-1">
                    <img id="product-image" src="https://via.placeholder.com/400x400" alt="Product" class="w-full rounded-lg shadow-md">
                    <div class="flex gap-4 mt-4">
                        <img src="https://via.placeholder.com/100" alt="Thumbnail" class="w-20 h-20 rounded-md shadow-md">
                        <img src="https://via.placeholder.com/100" alt="Thumbnail" class="w-20 h-20 rounded-md shadow-md">
                    </div>
                </div>
                <!-- Product Details -->
                <div class="flex-1">
                    <h1 id="product-name" class="text-2xl font-bold text-gray-700">Cadbury Dairy Milk Fruit & Nut</h1>
                    <p id="product-price" class="text-lg font-bold text-gray-500">LKR <span id="unit-price">2,250</span></p>
                    <p class="text-gray-600 mt-4">A delicious combination of almonds and raisins with Cadbury's smooth dairy milk chocolate.</p>
                    <div class="mt-4 flex items-center gap-2">
                        <label for="quantity" class="text-gray-700 font-semibold">Quantity:</label>
                        <div class="flex border rounded-lg">
                            <button onclick="updateQuantity('decrease')" class="px-4 py-2 bg-gray-200 hover:bg-gray-300">-</button>
                            <input id="quantity" type="text" value="1" readonly class="w-12 text-center">
                            <button onclick="updateQuantity('increase')" class="px-4 py-2 bg-gray-200 hover:bg-gray-300">+</button>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold text-gray-700">SubTotal: LKR <span id="subtotal">2,250</span></p>
                    </div>
                    <div class="mt-4 flex gap-4">
                        <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-2 px-6 rounded-lg">Add to Cart</button>
                        <button class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-6 rounded-lg">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cart Summary -->
        <div class="bg-white mt-8 p-6 shadow-lg rounded-lg">
            <h2 class="text-lg font-bold text-gray-700">Cart Totals</h2>
            <div class="flex justify-between py-2">
                <span>SubTotal</span>
                <span id="cart-subtotal">LKR 2,250</span>
            </div>
            <div class="flex justify-between py-2">
                <span>Shipping</span>
                <span id="shipping">LKR 250</span>
            </div>
            <div class="flex justify-between font-bold py-2">
                <span>Total</span>
                <span id="total">LKR 2,500</span>
            </div>
            <div class="mt-4">
                <input id="coupon-code" type="text" placeholder="Coupon Code" class="border p-2 w-full">
                <button onclick="applyCoupon()" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 mt-2 w-full rounded-lg">Apply Coupon</button>
            </div>
            <button class="bg-purple-500 hover:bg-purple-600 text-white font-semibold py-2 px-6 rounded-lg mt-4 w-full">Proceed to Checkout</button>
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
        const unitPrice = 2250; // Example unit price
        const shippingCost = 250; // Example shipping cost
        let discount = 0;

        function updateQuantity(operation) {
            const quantityInput = document.getElementById("quantity");
            const subtotalElement = document.getElementById("subtotal");
            const cartSubtotalElement = document.getElementById("cart-subtotal");
            const totalElement = document.getElementById("total");

            let quantity = parseInt(quantityInput.value);

            if (operation === 'increase') {
                quantity += 1;
            } else if (operation === 'decrease' && quantity > 1) {
                quantity -= 1;
            }

            quantityInput.value = quantity;

            const subtotal = quantity * unitPrice;
            const total = subtotal + shippingCost - discount;

            subtotalElement.textContent = `LKR ${subtotal.toLocaleString()}`;
            cartSubtotalElement.textContent = `LKR ${subtotal.toLocaleString()}`;
            totalElement.textContent = `LKR ${total.toLocaleString()}`;
        }

        function applyCoupon() {
            const couponCode = document.getElementById("coupon-code").value.trim();
            const totalElement = document.getElementById("total");

            if (couponCode === "SAVE10") {
                discount = 500; // Example discount
                alert("Coupon applied successfully! LKR 500 discount added.");
            } else {
                discount = 0;
                alert("Invalid coupon code.");
            }

            const quantity = parseInt(document.getElementById("quantity").value);
            const subtotal = quantity * unitPrice;
            const total = subtotal + shippingCost - discount;

            totalElement.textContent = ` ${total.toLocaleString()}`;
        }
    </script>

</body>

</html>