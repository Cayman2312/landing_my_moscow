//Валидация данных формы на странице контактов
let $fio = $('.feedback-item__form').find('[name="fio"]');
let $email = $('.feedback-item__form').find('[name="email"]');
let $msg = $('.feedback-item__form').find('[name="message"]');
let $inputFields = [$fio, $email, $msg];
let $error = $('.contacts__feedback-item').find('.feedback-item__error');

$('.feedback-item__form').submit(function(e) {
  $($inputFields).each(function(index) {
    if ($(this).val() == '') {
      $(this).addClass('input-text-error');
      $error.slideDown(300);
      e.preventDefault();
    }
  });
});

$('.feedback-item__text').keyup(function(e) {
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
      $error.slideDown(300);
    }
  }

  if ($($fio).val() != '' && $($email).val() != '' && $($msg).val() != '') {
    $error.slideUp(300);
  }
});
