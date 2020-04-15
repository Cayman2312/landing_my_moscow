$('.menu-open').click(function() {
  if ($('.menu__nav').hasClass('menu-nav--open')) {
    $('.menu__nav').removeClass('menu-nav--open');
  } else {
    $('.menu__nav').addClass('menu-nav--open');
  }
});
