// changes the background color of the navigation bar based on the scroll position
window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;

    if (scrollPosition < 600) {
        document.querySelector('nav').style.backgroundColor = '#2C2F40';
        document.querySelectorAll('nav ul li a').forEach(link => {
            link.style.color = '#ffffff';
        });
    } else {
        document.querySelector('nav').style.backgroundColor = '#f8f9fa';
        document.querySelectorAll('nav ul li a').forEach(link => {
            link.style.color = '#000000';
        });
    }
});