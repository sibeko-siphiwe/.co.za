document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('#menu');
    const menuOverlay = document.querySelector('.mobile-nav');

    // Toggle mobile menu
    menuToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        menuOverlay.classList.toggle('active');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.mobile-menu') && !e.target.closest('.mobile-nav')) {
            menuOverlay.classList.remove('active');
        }
    });

    // Close menu when clicking links
    document.querySelectorAll('.mobile-nav a').forEach(link => {
        link.addEventListener('click', () => {
            menuOverlay.classList.remove('active');
        });
    });
});