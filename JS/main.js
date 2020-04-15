// Валидация данных формы на основной странице
let $fio = $('.contacts__form').find('[name="fio"]');
let $email = $('.contacts__form').find('[name="email"]');
let $phone = $('.contacts__form').find('[name="phone"]');
let $msg = $('.contacts__form').find('[name="message"]');
let $inputFields = [$fio, $email, $phone, $msg];
let $error = $('.contacts').find('.input-error');

$('.contacts__form').submit(function(e) {
  $($inputFields).each(function(index) {
    if ($(this).val() == '') {
      $(this).addClass('input-text-error');
      $error.slideDown(500);
      e.preventDefault();
    }
  });
});

$('input, textarea').keyup(function(e) {
  if (
    e.keyCode != 9 &&
    e.keyCode != 16 &&
    e.keyCode != 17 &&
    e.keyCode != 18 &&
    e.keyCode != 20
  ) {
    if ($(this).val() != '') {
      $(this).removeClass('input-text-error');
    } else {
      $(this).addClass('input-text-error');
      $error.slideDown(500);
    }
  }

  if (
    $($fio).val() != '' &&
    $($email).val() != '' &&
    $($phone).val() != '' &&
    $($msg).val() != ''
  ) {
    $error.slideUp(500);
  }
});

//слайдер
let $slider = $('.background-slider');
let $sliderItemClone = $('.slider--image:first-child').clone();
$slider.append($sliderItemClone);
let $sliderItems = $slider.find('.slider--image');

let currentImage = 0;

$('.header__arrow-right').click(function() {
  backgroundRightClick();
});

$('.header__arrow-left').click(function() {
  backgroundLeftClick();
});

function backgroundRightClick() {
  if (currentImage < 5) {
    currentImage++;
    $slider.animate(
      {
        left: -100 * currentImage + '%'
      },
      500
    );
  } else {
    $slider.css('left', '0');
    currentImage = 1;
    $slider.animate(
      {
        left: -100 * currentImage + '%'
      },
      500
    );
  }
  $('.control__items-slider').animate(
    {
      left: '-54px'
    },
    500,
    function() {
      $('.control__items-slider').css('left', '0');
    }
  );
}
function backgroundLeftClick() {
  if (currentImage > 0) {
    currentImage--;
    $slider.animate(
      {
        left: -100 * currentImage + '%'
      },
      500
    );
  } else {
    $slider.css('left', '-500%');
    currentImage = 4;
    $slider.animate(
      {
        left: -100 * currentImage + '%'
      },
      500
    );
  }
  $('.control__items-slider').animate(
    {
      left: '54px'
    },
    500,
    function() {
      $('.control__items-slider').css('left', '0');
    }
  );
}
