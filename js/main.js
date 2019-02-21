$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        nav: true,
        dots: false
    });

    function cambiarBotones() {
        $('.owl-next').html('<i class="fas fa-angle-right"></i>');
        $('.owl-prev').html('<i class="fas fa-angle-left"></i>');
    }

    cambiarBotones();

    function contacto() {
        $('.activate-contact').click(function(e) {

            e.preventDefault();
            $('.button-contact').removeClass('hide');
            $('.button-contact').addClass('show');
        });
    }

    contacto();
});