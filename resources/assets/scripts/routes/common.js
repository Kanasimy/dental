export default {
  init() {
    // JavaScript to be fired on all pages
    $('.collapse').collapse('hide');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('.certificates__slider .owl-carousel').owlCarousel({
      loop: true,
      nav: true,
      items: 1,
      margin: 0,
      responsive: {
        576: {
          items: 1,
          margin: 10,
        },
        768: {
          items: 3,
          margin: 50,
        },
        1180: {
          items: 4,
          margin: 100,
        },
      },
    })
  },
};
