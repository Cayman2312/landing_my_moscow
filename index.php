<?php
$title = 'Главная';
include('parts/header.php');
?>

<!-- Заголовок -->
<header class="header-background">
  <div class="background-slider">
    <div class="slider--image">
      <h2 class="main__title">Необычная Москва</h2>
      <p class="main__text">MyMoskow - агенство интересных маршрутов</p>
    </div>
    <div class="slider--image">
      <h2 class="main__title">Заголовок слайда №2</h2>
      <p class="main__text">Текст слайда №2</p>
    </div>
    <div class="slider--image">
      <h2 class="main__title">Заголовок слайда №3</h2>
      <p class="main__text">Текст слайда №3</p>
    </div>
    <div class="slider--image">
      <h2 class="main__title">Заголовок слайда №4</h2>
      <p class="main__text">Текст слайда №4</p>
    </div>
    <div class="slider--image">
      <h2 class="main__title">Заголовок слайда №5</h2>
      <p class="main__text">Текст слайда №5</p>
    </div>
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
          <a href="/" class="menu__nav-item menu__nav-item--active">
            Главная
          </a>
          <a href="trips.php" class="menu__nav-item">Наши услуги</a>
          <a href="#" class="menu__nav-item">О компании</a>
          <a href="contacts.php" class="menu__nav-item">Контакты</a>
          <a href="#" class="menu__nav-item">Отзывы</a>
        </nav>
      </div>

      <div href="#" class="header__arrow-right"></div>
      <div href="#" class="header__arrow-left"></div>
      <div class="header__control">
        <a href="#" class="control__button">Подробнее о нас</a>
        <div class="control__items">
          <div class="control__items-slider">
            <div class="control__item"></div>
            <div class="control__item"></div>
            <div class="control__item"></div>
            <div class="control__item"></div>
            <div class="control__item"></div>
          </div>
          <div class="control__item--active"></div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Наши предложения -->
<div class="wrapper">
  <div class="offer">
    <h3 class="offer__title">Что мы предлагаем?</h3>
    <p class="offer__text">
      Наша главная цель - рассказать о Москве так, чтобы это было интересно
      всем
    </p>
    <div class="offer__items">
      <div class="offer__item">
        <div class="item__pic item__pic--1"></div>
        <div class="item__description">
          <p class="description__title">
            Необычные маршруты
          </p>
          <p class="description__text">
            Мы обязательно порадуем тебя необычными маршрутами Москвы,
            которые прокладывают наши опытные гиды. Ты увидишь и узнаешь о
            Москве то, что никогда не знал!
          </p>
        </div>
      </div>
      <div class="offer__item">
        <div class="item__pic item__pic--2"></div>
        <div class="item__description">
          <p class="description__title">
            Классные сувениры
          </p>
          <p class="description__text">
            Отличная новость! У нас появился магазин сувениров! И самое
            примечательное, что все эти сувениры мы делаем сами! Заходи к
            нам в гости!
          </p>
        </div>
      </div>
      <div class="offer__item">
        <div class="item__pic item__pic--3"></div>
        <div class="item__description">
          <p class="description__title">
            Интересные экскурсии
          </p>
          <p class="description__text">
            За время экскурсий, которых у нас больше 20, ты узнаешь и
            увидишь все основные досопримечательности: Кремль, Храм Христа
            Спаителя, так и пройдешься по пешеходным улицам Москвы, узнаешь
            их историю и сделаешь самые классные фотографии.
          </p>
        </div>
      </div>
      <div class="offer__item">
        <div class="item__pic item__pic--4"></div>
        <div class="item__description">
          <p class="description__title">
            Фотосессии в Москве
          </p>
          <p class="description__text">
            Команда MyMoscow рада провести креативные фотосессии в любом
            уголке Москвы. Не важно, свадьба у Вас или просто захотелось
            добавить в альбом или инстаграм красивых фоток.
          </p>
        </div>
      </div>
      <div class="offer__item">
        <div class="item__pic item__pic--5"></div>
        <div class="item__description">
          <p class="description__title">
            Новые знакомства
          </p>
          <p class="description__text">
            MyMoscow - это целый клуб, где после московских проулок ты
            сможешь продолжить общение с теми, кому интересна Москва ,
            знакомиться с новыми людьми и делиться впечатлениями.
          </p>
        </div>
      </div>
      <div class="offer__item">
        <div class="item__pic item__pic--6"></div>
        <div class="item__description">
          <p class="description__title">Яркие впечатления</p>
          <p class="description__text">
            Самое важное - это яркие эмоции, которые остануться с тобой на
            долгое время! Поэтому в нашей команде мы ждем именно тебя!
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Описание -->
<div class="about">
  <div class="wrapper">
    <div class="about-article ">
      <h3 class="about-title">Кто мы такие</h3>
      <p class="about-text">
        Мы - команда тех, кто любит историю и любит Москву.
        <br />
        <br />
        Москва – это не только место по «заколачиванию денег» и «взращиванию
        карьеры», а еще и бесконечно красивые памятники природы, заказники,
        парки, заповедники. Активный отдых в Москве и Подмосковье – это
        отличная возможность вырваться из душного мегаполиса куда-нибудь в
        «дебри», навстречу приключениям. К счастью, не все Подмосковье еще
        «облагорожено» асфальтными дорожками и высоченными коттеджными
        заборами. Еще встречаются места, настолько глухие и далекие, что,
        очутившись там, кажется, что ты – первый человек, ступивший на эту
        землю.
        <br />
        <br />
        Там, где не проедет автомобилист и даже велосипедист, найдет лазейку
        и откроет для себя все красоты 100% бездорожья турист, проводящий
        свой активный отдых в Подмосковье.
      </p>
      <div class="about-button">Подробнее о нас</div>
    </div>
  </div>
</div>

<!-- Фотографии -->
<div class="photo">
  <div class="wrapper photo__header">
    <h3 class="photo__title">Москва в фотографиях</h3>
    <p class="photo__text">
      Проще всего рассказать обо всем в фотографиях. Смотрите наши
      фотоотчеты и присылайте нам свои фотографии.
    </p>
  </div>
  <div class="photo__items">
    <div class="photo__item photo__item--1"></div>
    <div class="photo__item photo__item--2"></div>
    <div class="photo__item photo__item--3"></div>
    <div class="photo__item photo__item--4"></div>
    <div class="photo__item photo__item--5"></div>
    <div class="photo__item photo__item--6"></div>
    <div class="photo__item photo__item--7"></div>
    <div class="photo__item photo__item--8"></div>
  </div>
</div>

<!-- Отзывы -->
<div class="wrapper">
  <div class="feedback">
    <h3 class="feedback__title">Отзывы</h3>
    <div class="feedback__users">
      <div class="feedback__user">
        <div class="user__text">
          Были с дочкой и подругой на ночной экскурсии. Все таки как много
          зависит от экскурсовода! Мы все четыре часа ходили за Станиславом
          Симоновым, как кролики. Боялись пропустить хоть одно слово. При
          этом моей дочке - которая побывала во многих местах и с детства
          искушенная на интересные события - была сильно увлечена.
        </div>
        <div class="user__data">
          <div class="user__photo user__photo--2"></div>
          <div class="user__name">Екатерина Васильева</div>
        </div>
      </div>
      <div class="feedback__user">
        <div class="user__text">
          Ездили на экскурсию с семиклассниками и родителями. Всем очень
          понравилось! Экскурсовод Михаил Борисович очень интересно,
          необычно и с юмором рассказывал о Москве 16 века. Гибко
          подстраивал эксукурсию под интересы и потребности слушателей,
          ловко «управлял» подачей автобуса, не давая нам замёрзнуть.
          Огромное спасибо!
        </div>
        <div class="user__data">
          <div class="user__photo user__photo--1"></div>
          <div class="user__name">Анна Крушевская</div>
        </div>
      </div>
    </div>
    <div class="feedback__scroll">
      <div class="feedback__scroll-item feedback__scroll-item--active"></div>
      <div class="feedback__scroll-item"></div>
      <div class="feedback__scroll-item"></div>
      <div class="feedback__scroll-item"></div>
    </div>
  </div>
</div>

<!-- Свяжитесь с нами -->
<div class="contacts">
  <div class="wrapper">
    <h3 class="contacts__title">Напишите нам</h3>
    <div class="input-error">
      Пожалуйста, заполните все поля формы обратной связи
    </div>
    <form action="main_form.php" method="post" class="contacts__form">
      <div class="contacts__input">
        <input type="text" name="fio" placeholder="ФИО" class="input-text" />
        <input type="email" name="email" placeholder="Email" class="input-text" />
        <input type="tel" name="phone" placeholder="Телефон" class="input-text" />
      </div>
      <textarea name="message" placeholder="Ваше сообщение" class="contacts__textarea"></textarea>
      <label class="label_agreement">
        <input type="checkbox" name="agreement" value="yes">Согласен(-на) на обработку персональных данных
      </label>
      <input type="submit" value="отправить вопрос" class="input__button" />
    </form>
  </div>
  <h4 class="wrapper input-ok">Спасибо! Ваш вопрос очень важен для нас!</h4>
</div>

<!-- Подвал -->
<?php
$JS = 'main.js';
include('parts/footer.php');
?>