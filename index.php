<?php
echo 'Привет';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Дмитрий Алексеев - официальная страничка</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header-wrap">
        <nav class="header-menu">
          <ul class="header-menu__items">
            <li class="header-menu__item">
              <a href="" class="header-menu__link">Услуги</a>
            </li>
            <li class="header-menu__item">
              <a href="" class="header-menu__link">Портфолио</a>
            </li>
            <li class="header-menu__item">
              <a href="" class="header-menu__link">Стоимость</a>
            </li>
          </ul>
          <!-- /.header-menu__items -->
        </nav>
        <!-- /.header-menu -->
        <div class="header-contacts">
          <a href="tel:+74999955577" class="header-contacts__phone">+7 (499) 995-55-77</a> 
          <!-- /.header-contacts__phone -->
          <button class="btn-o header-contacts__btn">Заказать звонок</button>
           <!-- /.btn -->
        </div>
        <!-- /.header-contacts -->
      </div>
    </div>
    <!-- /.container -->
  </header>
  <!-- /.header -->
  <main class="main">
    <div class="container">
      <div class="main-wrap">
        <div class="main-text">
          <h1 class="main-text__title">Дмитрий Алексеев</h1>
          <h3 class="main-text__subtitle">Frontend-разработчик и веб-верстальщик</h3>
          <button class="btn main-btn">Узнать больше</button>
        </div>
        <div class="main-photo">
          <img src="img/DmitryAleksee1v.png" alt="Мое фото">
        </div>
      </div>
    </div>
  </main>
  <!-- /.main -->
  <section class="calling">
    <div class="container">
      <h2 class="calling-title">
        Что я делаю
      </h2>
        <ul class="calling-content">
          <li class="calling-content__item">
            <img src="img/icons/tools-and-utensils.png" alt="Верстка" class="calling-content__img">
            <p class="calling-contet__text">
                Вёрстка лендинг–страниц
                и сайтов любой сложности
            </p>
          </li>
          <li class="calling-content__item">
            <img src="img/icons/responsive.png" alt="Адаптивная верстка" class="calling-content__img">
            <p class="calling-contet__text">
                Адаптивная вёрстка под все
                браузеры и устройства
            </p>
          </li>
          <li class="calling-content__item">
            <img src="img/icons/coding(1).png" alt="Front программирование" class="calling-content__img">
            <p class="calling-contet__text">
                Frontend–разработка
                и программирование
            </p>
          </li>
          <li class="calling-content__item">
            <img src="img/icons/programming.png" alt="Доработки верстки" class="calling-content__img">
            <p class="calling-contet__text">
                Исправление и доработка
                существующей вёрстки
            </p>
          </li>
        </ul>
        <button class="btn calling-btn">Узнать стоимость</button>
    </div>  
  </section>
  <!-- /.calling -->
  <section class="example-job">
    <div class="container">
      <h2 class="example-job__title">
        Примеры моих работ
      </h2>
      <ul class="example-job__content">
        <li class="example-job__item">
          <a href="#">
            <img src="img/Portfolio_1.png" alt="Фото сайта психолога" class="example-job__img">
            <p class="example-job__text">
              Сайт психолга Веры Антоновой
            </p>
          </a>
        </li>
        <li class="example-job__item">
          <a href="#">
            <img src="img/Portfolio_2.png" alt="Фото сайта детской одежды" class="example-job__img">
            <p class="example-job__text">
              Сайт магазин детской одежды
            </p>
          </a>
        </li>
        <li class="example-job__item">
          <a href="#">
            <img src="img/Portfolio_3.png" alt="Фото сайта Рыболов" class="example-job__img">
            <p class="example-job__text">
              Сайт магазин рыболов
            </p>
          </a>
        </li>
      </ul>
      <button class="btn example-job__btn">Заказать проект</button>
    </div>
  </section>
  <!-- /.example-job -->
  <section class="offer">
    <div class="container">
      <div class="offer-wrap">
        <h2 class="offer-title">
            Адаптивная вёрстка под все устройства <br>
            и браузеры от 1000 рублей всего за 4 часа.*
        </h2>
        <p class="offer-subtitle">
            Срок и стоимость могут отличаться от заявленных и рассчитываются  индивидуально, <br>
            <span class="offer-subtitle_text offer-subtitle__text_left"></span> в зависимости от сложности задач.
        </p>
      </div>  
    </div>
  </section>
  <!-- /.offer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-info">
        <ul class="footer-info__menu">
          <li class="footer-info__item">
            <a href="" class="footer-info__link">Услуги</a>
          </li>
          <li class="footer-info__item">
            <a href="" class="footer-info__link">Портфолио</a>
          </li>
          <li class="footer-info__item">
            <a href="" class="footer-info__link">Стоимость</a>
          </li>
        </ul>
        <ul class="footer-contacts">
          <li class="footer-contacts__item">
            <a href="tel:+74999957755" class="footer-contacts__phone">+7 (499) 995-77-55</a>
          </li>
          <li class="footer-contacts__item">
            <a href="mailto:dmitry@alekseev.com" class="footer-contacts__mail">dmitry@alekseev.com</a>
          </li>
        </ul>
        <div class="footer-social">
          <button class="btn-o footer-social__btn">Заказать звонок</button>
          <ul class="footer-social__link">
            <li class="footer-social-item">
              <a href="https://vk.com/">
                <img src="img/icons/vk(1).png" alt="Вконтакте">
              </a>
            </li>
            <li class="footer-social-item">
              <a href="https://facebook.com/">
                 <img src="img/icons/facebook-logo(1).png" alt="Фейсбук">
               </a>
            </li>
            <li class="footer-social-item">
              <a href="https://twitter.com">
                <img src="img/icons/twitter-logo-silhouette.png" alt="Твиттер">
              </a>
            </li>
            <li class="footer-social-item">
              <a href="https://instagram.com/">
                <img src="img/icons/instagram-social-network-logo-of-photo-camera.png" alt="Инстаграмм">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
        <address>
            © Дмитрий Алексеев, 2016 – 2018
        </address>
      </div>
  </footer>
  <!-- /.footer -->




</body>
</html>
