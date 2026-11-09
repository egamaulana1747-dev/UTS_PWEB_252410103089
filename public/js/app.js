// ================================================
// Logbook Langit — App JS
// Dipanggil via asset('js/app.js') di layout
// ================================================

document.addEventListener('DOMContentLoaded', function () {

    // Tandai menu navbar yang sedang aktif
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('nav a[data-nav]');

    navLinks.forEach(function (link) {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('text-white', 'underline', 'underline-offset-4');
        }
    });

    console.log('🔭 Logbook Langit berhasil dimuat.');
});