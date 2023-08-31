

document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
        var header = document.getElementsByClassName('header')[0];

        if (header) {
            if (window.scrollY > 0) {
                header.style.backgroundColor = '#111926';
            } else {
                header.style.backgroundColor = 'rgba(0, 0, 0, 0.3)';
            }
        }
    });
});
var menu= document.getElementsByClassName('header__nav')[0];
var toggle= document.getElementById('toggle-menu');
toggle.addEventListener('click',()=> {
    if (menu.classList.contains('active')) {
        menu.classList.remove('active');
    } else {
        menu.classList.add('active');
        menu.style= backgroundColor="black"
    }
})
console.log(menu)