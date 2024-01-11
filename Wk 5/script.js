var currentPage = window.location.href;

function setActiveLink() {
    var links = document.querySelectorAll('.head-links a');

    links.forEach(function(link) {
        if (link.href === currentPage) {
            link.classList.add('active');
        }
    });
}

window.onload = setActiveLink;
