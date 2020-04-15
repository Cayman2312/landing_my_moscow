<?php
$title = 'Контакты';
include('parts/header.php');
?>

<!-- Заголовок -->
<header class="header-background">
  <div class="background-image background-image--contacts">
    <h2 class="main__title">MyMoskow</h2>
    <p class="main__text">Агенство интересных маршрутов</p>
    <p class="main__text">-КОНТАКТЫ-</p>
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
          <a href="contacts.php" class="menu__nav-item  menu__nav-item--active">
            Контакты
          </a>
          <a href="#" class="menu__nav-item">Отзывы</a>
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- Наши предложения -->
<div class="main-contact wrapper">
  <h2 class="main-contacts__header">контакты</h2>
  <p class="main-contacts__text">
    Мы - команда тех, кто любит историю и любит Москву. <br /><br />
    Москва – это не только место по «заколачиванию денег» и «взращиванию
    карьеры», а еще и бесконечно красивые памятники природы, заказники, парки,
    заповедники. Активный отдых в Москве и Подмосковье – это отличная
    возможность вырваться из душного мегаполиса куда-нибудь в «дебри», навстречу
    приключениям. К счастью, не все Подмосковье еще «облагорожено» асфальтными
    дорожками и высоченными коттеджными заборами. Еще встречаются места,
    настолько глухие и далекие, что, очутившись там, кажется, что ты – первый
    человек, ступивший на эту землю.
    <br /><br />
    Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и
    откроет для себя все красоты 100% бездорожья турист, проводящий свой
    активный отдых в Подмосковье.
  </p>
  <div class="main-contacts__leaders">
    <div class="main-contacts__lead">
      <div class="lead__photo lead__photo--1"></div>
      <div class="lead__description">
        <h4 class="lead__description-title">Александр Рыбаков</h4>
        <p class="lead__description-text">директор</p>
        <br />
        <p class="lead__description-text">По всем вопросам пишите на почту:</p>
        <p>
          <a href="mailto:rybakov@mymoscow.ru" class="lead__description-mail">
            rybakov@mymoscow.ru
          </a>
        </p>
      </div>
    </div>
    <div class="main-contacts__lead">
      <div class="lead__photo lead__photo--2"></div>
      <div class="lead__description">
        <h4 class="lead__description-title">Елена Белкина</h4>
        <p class="lead__description-text">руководитель корпоративного отдела</p>
        <br />
        <p class="lead__description-text">
          По вопросам корпоративных экскурсий:
        </p>
        <p>
          <a href="mailto:belkina@mymoscow.ru" class="lead__description-mail">
            belkina@mymoscow.ru
          </a>
        </p>
      </div>
    </div>
  </div>

  <div class="contacts__feedback">
    <div class="contacts__feedback-item">
      <a href="#" class="contacts-item">
        Москва,<br />
        Большая Спасская 12
      </a>
      <a href="mailto:moscow@imoscow.ru" class="contacts-item">
        Email <br />moscow@imoscow.ru
      </a>
      <a href="tel:+74956264600" class="contacts-item">
        Телефон: <br />8 (495) 626-46-00
      </a>
    </div>
    <div class="contacts__feedback-item">
      <h3 class="feedback-item__title">Напишите нам</h3>
      <div class="feedback-item__error">
        Пожалуйста, заполните все поля формы обратной связи
      </div>
      <form action="main_form.php" method="post" class="feedback-item__form">
        <input type="text" name="fio" placeholder="ФИО" class="feedback-item__text" />
        <input type="email" name="email" placeholder="Email" class="feedback-item__text" />
        <textarea name="message" placeholder="Ваше сообщение" class="feedback-item__text feedback-item__textarea"></textarea>
        <label>
          <input type="checkbox" name="agreement" value="yes">Согласен(-на) на обработку персональных данных
        </label>
        <br><br>
        <input type="submit" value="отправить вопрос" class="feedback-item__button" />
      </form>
      <h4 class="feedback-item_ok">Спасибо! Ваш вопрос очень важен для нас!</h4>
    </div>
  </div>
</div>

<div class="contacts-location"></div>

<!-- Подвал -->

<?php
$JS = 'contacts.js';
include('parts/footer.php');
?>