<?php
@include './config/Database.php'
?>


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
    <main>


        <section class="relative w-full h-auto">
            <img src="assets/aboutbg.jpg" alt="Background Image" class="w-full object-cover">
            <div class="absolute bottom-4 left-4">
                <h1 class="text-white text-xl md:text-9xl font-bold drop-shadow-lg">
                    ABOUT
                </h1>
            </div>
        </section>


        <section class="px-8 py-12 max-w-7xl mx-auto">
            <p>
                The crunchy sweets industry is a vibrant and evolving sector that thrives on creativity and consumer
                engagement. This category encompasses an array of delightful treats, from traditional confections to
                innovative snacks that cater to a broad spectrum of tastes. Success in this industry hinges on a strong
                focus on innovation, ensuring that products stand out in a crowded marketplace. Unique flavor
                combinations, innovative textures, and the introduction of health-conscious alternatives like low-sugar
                or gluten-free options can attract a diverse customer base and set a brand apart from its competitors.
            </p>
            <br></br>
            <p>
                Quality assurance is another cornerstone of the crunchy sweets business. Consumers expect consistent
                taste and texture, and any compromise can harm a brand’s reputation. To ensure quality, businesses must
                prioritize the use of premium ingredients, maintain strict hygiene standards, and implement
                comprehensive quality control processes throughout the production and distribution stages.
                Certifications for safety and quality, such as ISO or HACCP, can enhance consumer trust and provide a
                competitive edge in a discerning market.
            </p>
            <br></br>
            <p>
                Marketing plays a critical role in the success of crunchy sweets. Leveraging digital platforms such as
                social media and e-commerce sites allows brands to reach a broader audience and engage with customers on
                a personal level. Social media campaigns, influencer partnerships, and user-generated content can
                significantly boost visibility and drive sales. Seasonal promotions and limited-edition products tied to
                holidays or cultural events can also generate excitement and create a sense of urgency among consumers,
                leading to increased demand.Sustainability is becoming a key consideration for businesses in this
                industry. Environmentally conscious consumers are more likely to support brands that embrace
                eco-friendly practices, such as using
                biodegradable packaging, reducing food waste, and sourcing ethically produced ingredients. Incorporating
                sustainability into the business model not only appeals to this growing demographic but also positions
                the brand as a socially responsible entity. Long-term benefits include cost savings, enhanced brand
                loyalty, and a positive environmental impact.

            </p>
            <br></br>
            <p>
                Technology is reshaping the crunchy sweets industry in multiple ways. Automation in production processes
                helps achieve consistency, reduce costs, and improve efficiency. Advanced technologies like data
                analytics enable businesses to better understand consumer preferences and trends, leading to more
                targeted product offerings and marketing strategies. Augmented and virtual reality experiences, such as
                interactive packaging or online tasting events, add a new dimension to customer engagement, appealing to
                tech-savvy audiences and enhancing the overall brand experience.Globalization has opened new horizons
                for the crunchy sweets industry, presenting opportunities for
                international growth. Expanding into global markets requires a nuanced understanding of local consumer
                preferences, dietary habits, and regulatory environments. Brands that successfully tailor their products
                to meet the needs of different regions can tap into diverse markets and achieve significant growth.
                Collaborating with local distributors, creating region-specific marketing campaigns, and ensuring
                compliance with local regulations are critical steps in establishing a strong foothold in global
                markets. This approach not only diversifies revenue streams but also builds a resilient business capable
                of adapting to global trends.
            </p>

        </section>

        <div class="relative w-full h-auto">
            <img src="assets/aboutbg2.jpg" alt="Bakery Items" class="w-full object-cover">
        </div>

        <section class="py-12 px-8">
            <h2 class="text-4xl font-bold mb-6 flex items-center justify-center">Food Safety Policy</h2>
            <p>
                Crunchy Sweets (Pvt) Ltd takes pride in delivering high-quality culinary creations that encompass a
                diverse range of products.
                From artisanal cakes and delicate gateaux to savory ready-to-eat meals and refreshing beverages, the
                company’s portfolio is designed to cater to a
                variety of tastes and occasions. Its outdoor catering services further enhance its offerings, providing
                customized solutions for events of all sizes,
                ensuring memorable experiences for its clients. This commitment to diversity and quality enables Crunchy
                Sweets to establish itself as a trusted name
                in the food and beverage industry.
            </p>
            <br></br>
            <p>
                A robust Food Safety Management System (FSMS) forms the backbone of Crunchy Sweets' operations, ensuring
                the highest levels of safety and hygiene. By adhering to globally recognized standards such as HACCP
                (Hazard Analysis and Critical Control Points), the company identifies and mitigates potential hazards
                throughout its production and supply chain processes. Comprehensive documentation and meticulous
                record-keeping provide a transparent framework that supports regulatory compliance and builds consumer
                trust. These practices underscore the company’s dedication to safeguarding the health and well-being of
                its customers.
            </p>
            <br></br>
            <p>
                In addition to food safety, Crunchy Sweets places a strong emphasis on maintaining operational
                excellence and sustainability. By aligning its processes with statutory and regulatory requirements, the
                company not only ensures the safety of its products but also positions itself as a responsible corporate
                entity. Continuous improvement initiatives, such as staff training and technological advancements, are
                integral to its strategy, enhancing productivity and quality. This approach not only fortifies the
                company’s market position but also reflects its commitment to delivering exceptional value while meeting
                the evolving needs of its customers.
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