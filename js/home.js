// Define items for both sections
const sweets = [
    { image: 'assets/donut.jpg', name: 'Donuts' },
    { image: 'assets/Cookies.jpg', name: 'Cookies' },
    { image: 'assets/Brownies.jpeg', name: 'Brownies' },
    { image: 'assets/Cupcake1.jpg', name: 'Cup Cakes' },
    { image: 'assets/eclairs.jpg', name: 'Eclairs' },
    { image: 'assets/pastries.png', name: 'Pasties' },
    { image: 'assets/muffin.jpg', name: 'Muffins' },
    { image: 'assets/jarcakes.png', name: 'Jar Cakes' },
];

const chocolates = [
    { image: 'assets/dairymilk.jpg', name: 'Dairy Milk Chocolates' },
    { image: 'assets/kitkat.webp', name: 'KitKat Chocolate' },
    { image: 'assets/mars.webp', name: 'Mars Chocolate' },
    { image: 'assets/twix.png', name: 'Twis Chocolate' },
    { image: 'assets/snackers.jpg', name: 'Snickers Chocolates' },
    { image: 'assets/milka.jpg', name: 'Milka Chocolate' },
    { image: 'assets/FerreroRocher.webp', name: 'Ferrero Rocher Chocolate' },
    { image: 'assets/toblerone.png', name: 'Toblerone Chocolate' },
];

// Initialize current pages
let currentPageSweets = 1;
let currentPageChocolate = 1;
const itemsPerPage = 4;

// Function to render items based on section
function renderItems(section) {
    let currentPage;
    let itemsToShow;
    let itemContainer;

    if (section === 'sweets') {
        currentPage = currentPageSweets;
        itemsToShow = sweets.slice((currentPage - 1) * itemsPerPage, currentPage * itemsPerPage);
        itemContainer = document.getElementById('itemContainerSweets');
    } else {
        currentPage = currentPageChocolate;
        itemsToShow = chocolates.slice((currentPage - 1) * itemsPerPage, currentPage * itemsPerPage);
        itemContainer = document.getElementById('itemContainerChocolate');
    }

    itemContainer.innerHTML = ''; // Clear previous content

    // Loop through the items to create the HTML structure
    itemsToShow.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.classList.add('text-center');

        itemElement.innerHTML = `
            <img src="${item.image}" alt="${item.name}" class="w-64 h-64 rounded-lg shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
            <p class="mt-4 text-gray-600 font-medium">${item.name}</p>
        `;

        itemContainer.appendChild(itemElement); // Append the item to the container
    });
}

// Function to change the page (previous/next)
function changePage(direction, section) {
    let totalPages;

    if (section === 'sweets') {
        totalPages = Math.ceil(sweets.length / itemsPerPage);
        currentPageSweets += direction;

        // Loop around the pages
        if (currentPageSweets < 1) currentPageSweets = totalPages;
        if (currentPageSweets > totalPages) currentPageSweets = 1;
    } else {
        totalPages = Math.ceil(chocolates.length / itemsPerPage);
        currentPageChocolate += direction;

        // Loop around the pages
        if (currentPageChocolate < 1) currentPageChocolate = totalPages;
        if (currentPageChocolate > totalPages) currentPageChocolate = 1;
    }

    renderItems(section); // Re-render items after changing the page
}

// Call renderItems for both sections on page load
window.onload = () => {
    renderItems('sweets');
    renderItems('chocolate');
};
