

document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
        var header = document.querySelector('.header');

        if (header) {
            if (window.scrollY > 0) {
                header.style.backgroundColor = '#111926';
            } else {
                header.style.backgroundColor = 'rgba(0, 0, 0, 0.3)';
            }
        }
    });
});
