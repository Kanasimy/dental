export default {
  init() {
    // Карусель на главной
    $('.carousel').carousel();
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $('.certificates-slider').owlCarousel({
      loop: true,
      margin: 100,
      nav: true,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 4,
        },
      },
    })
    // Анимация
    $('.animate').addClass('hidden').viewportChecker({
      classToAdd: 'visible animated fadeInDown',
      offset: 0,
    });
  },
};
