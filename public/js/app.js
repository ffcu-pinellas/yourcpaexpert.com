// Basic app.js for Your CPA Expert
document.addEventListener('DOMContentLoaded', () => {
    console.log('Your CPA Expert Portal Initialized');

    // Smooth scroll for nav links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
