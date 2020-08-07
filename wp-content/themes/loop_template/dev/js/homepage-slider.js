var mySwiper = new Swiper ('.swiper-container-homepage', {

    slidesPerView: 'auto',

    speed: 700,

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },

    // Optional parameters
    loop: true,

    grabCursor: true,


    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        
      },

      keyboard: true,

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },


  });