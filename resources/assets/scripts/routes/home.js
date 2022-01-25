export default {
  init() {
    // Карусель на главной
    $('.carousel').carousel();
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    // Анимация
    $('.animate').addClass('hidden').viewportChecker({
      classToAdd: 'visible animated fadeInDown',
      offset: 0,
    });
  },
};
