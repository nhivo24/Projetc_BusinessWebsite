$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
var navbar = document.querySelector('nav')

window.onscroll = function() {

    // pageYOffset or scrollY
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled')
    } else {
        navbar.classList.remove('scrolled')
    }
}