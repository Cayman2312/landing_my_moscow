<?php
$title = 'Отправка формы';
include('parts/header.php');

if (!isset($_POST['fio'])) {
  $answer = 'Пожалуйста заполните все поля формы обратной связи перед отправкой';
} elseif (!isset($_POST['agreement'])) {
  $answer = 'Перед отправкой данных на сервер необходимо подтвердить согласие на обработку персональных данных';
} else {
  $fio = $_POST['fio'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
  } else {
    $phone = 'no phone';
  }

  $link = mysqli_connect('localhost', 'root', '', 'project1');
  mysqli_set_charset($link, "utf8");

  $qr = "INSERT INTO questions(fio, email, phone, message) 
  VALUES ('$fio', '$email', '$phone', '$message')";

  $result = mysqli_query($link, $qr);

  if ($result) {
    $answer = 'Поздравляем, Ваш вопрос успешно отправлен.<br> В ближайшее время с Вами свяжется наш представитель!';
  } else {
    $answer = 'К сожалению отправка на сервер не удалась по техническим причинам.';
  }
}
?>

<!-- Заголовок -->
<header class="header-background">

  <div class="background-image background-image--main_form header__control">
    <h2 class="main__title"><?php echo "$answer"; ?></h2>
    <a href="/" class="control__button">Вернуться на главную</a>
  </div>

  <div class="wrapper flex-column">
    <div class="header">
      <div class="header-menu">
        <div class="menu__title">
          <a href="" class="menu__title-img"></a>
          <a href="" class="menu__title-text">MyMoskow</a>
        </div>
        <div class="menu-open">
          <span class="menu-line"></span>
          <span class="menu-line"></span>
          <span class="menu-line"></span>
        </div>
        <nav class="menu__nav">
          <a href="/" class="menu__nav-item">Главная</a>
          <a href="trips.php" class="menu__nav-item">Наши услуги</a>
          <a href="#" class="menu__nav-item">О компании</a>
          <a href="contacts.php" class="menu__nav-item">Контакты</a>
          <a href="#" class="menu__nav-item">Отзывы</a>
        </nav>
      </div>
    </div>
  </div>
</header>


<?php
include('parts/footer.php');
?>