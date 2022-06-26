const swiperLink = new Swiper('.swiper-link', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-link-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-link-button-next',
      prevEl: '.swiper-link-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-link-scrollbar',
    },
  });