// Get the current page URL
var currentPage = window.location.href;

// Function to set the "active" class to the corresponding link
function setActiveLink() {
    var links = document.querySelectorAll('.head-links a');

    links.forEach(function(link) {
        if (link.href === currentPage) {
            link.classList.add('active');
        }
    });
}

// Call the function when the page is loaded
window.onload = setActiveLink;
