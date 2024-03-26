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

navigate('dashboard');

function navigate(url) {
    let targetDiv = document.querySelector(`.${url}`);
    let activeDiv = document.querySelector('.active');
    if (!activeDiv.classList.contains(url)) {
        targetDiv.style.display = 'block';
        activeDiv.classList.add('animate__animated', 'animate__fadeOutUp');
        targetDiv.classList.add('animate__animated', 'animate__fadeInUp');

        setTimeout(() => {
            activeDiv.style.display = 'none';
            activeDiv.classList.remove('animate__animated', 'animate__fadeOutUp', 'active');
            targetDiv.classList.remove('animate__animated', 'animate__fadeInUp');
            targetDiv.classList.add('active');
        }, 1000);
    }
}
