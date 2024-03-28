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

let bezig = false;


navigate('events');



function navigate(url) {
    let targetDiv = document.querySelector(`.${url}`);
    let activeDiv = document.querySelector('.active');
    if (bezig === true) {
        return bezig;
    } else {
        if (!activeDiv.classList.contains(url)) {
            bezig = true;
            activeDiv.classList.add('animate__animated', 'animate__fadeOutUp');
            setTimeout(() => {
                activeDiv.style.display = 'none';
                targetDiv.style.display = 'block';
                activeDiv.classList.remove('animate__animated', 'animate__fadeOutUp', 'active');
                targetDiv.classList.add('animate__animated', 'animate__fadeInUp');
                targetDiv.classList.add('active');
            }, 1000);
            setTimeout(() => {
                targetDiv.classList.remove('animate__animated', 'animate__fadeInUp');
                bezig = false
            }, 2500);
        }
    }

}
