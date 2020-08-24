$(function(){

    // Initializing the swiper plugin for the slider.
    // Read more here: http://idangero.us/swiper/api/
    
    var mySwiper = new Swiper ('.swiper-container', {
        autoplay: {
            
        },

        speed: 5000,
        spaceBetween: 5,

        loop: true,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });
    

    var mySwiper2 = new Swiper ('.swiper-containermy', {
        autoplay: {
            delay:10000,
        },

        speed: 50000,
        spaceBetween: 20,
        loop: true,
        pagination: '.swiper-paginationmy',
        paginationClickable: true,
        nextButton: '.swiper-button-nextmy',
        prevButton: '.swiper-button-prevmy'
    });

});