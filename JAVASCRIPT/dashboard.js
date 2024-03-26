const sidebar = document.querySelector('.sidebar');
const navLinks = document.querySelectorAll('.nav-links li a');

navLinks.forEach(link => {
    link.addEventListener('mouseover', () => {
        sidebar.style.width = '260px';
    });
    link.addEventListener('mouseout', () => {
        if (window.innerWidth <= 768) {
            sidebar.style.width = '80px';
        }
    });
});

window.addEventListener('load', () => {
    setTimeout(() => {
        document.body.className = '';
    }, 1000);
});