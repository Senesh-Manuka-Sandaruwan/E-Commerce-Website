const items = [
    { image: 'assets/donut.jpg', name: 'Donuts' },
    { image: 'assets/Cookies.jpg', name: 'Cookies' },
    { image: 'assets/Brownies.jpeg', name: 'Brownies' },
    { image: 'assets/Cupcake1.jpg', name: 'Cup Cakes' }, 
    { image: 'assets/eclairs.jpg', name: 'Eclairs' },    
    { image: 'assets/muffin.jpg', name: 'Muffins' },
];

let currentPage = 1;
const itemsPerPage = 4;

function renderItems() {
    const startIdx = (currentPage - 1) * itemsPerPage;
    const endIdx = startIdx + itemsPerPage;
    const itemsToShow = items.slice(startIdx, endIdx);

    const itemContainer = document.getElementById('itemContainer');
    itemContainer.innerHTML = ''; 

    itemsToShow.forEach(items => {
        const itemElement = document.createElement('div');
        itemElement.classList.add('text-center');

        itemElement.innerHTML = `
            <img src="${items.image}" alt="${items.name}" 
                class="w-64 h-64 rounded-lg shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
            <p class="mt-4 text-gray-600 font-medium">${items.name}</p>
        `;

        itemContainer.appendChild(itemElement);
    });

    updatePageNumber();
}

function changePage(direction) {
    const totalPages = Math.ceil(items.length / itemsPerPage);

    currentPage += direction;

    if (currentPage < 1) {
        currentPage = totalPages; 
    } else if (currentPage > totalPages) {
        currentPage = 1; 
    }

    renderItems();
}

function updatePageNumber() {
    const totalPages = Math.ceil(items.length / itemsPerPage);
    const pageNumberElement = document.getElementById('pageNumber');
    pageNumberElement.textContent = `Page ${currentPage} of ${totalPages}`;
}

renderItems();
