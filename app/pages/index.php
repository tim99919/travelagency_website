<?php
defined("SPBPETERCITYTRIP_78") or die("Доступ закрыт!");
?>
<!DOCTYPE html>
<html lang="<?=$_SESSION['LANGUAGE_INT']?>">

<head>

  <meta charset="utf-8">
  <base href="/<?=$_SESSION['LANGUAGE_INT']?>">

  <title>SPBPETERCITYTRIP</title>
  <meta name="description" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Template Basic Images Start -->
  <meta property="og:image" content="path/to/image.jpg">
  <link rel="icon" href="/img/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon-180x180.png">
  <!-- Template Basic Images End -->

  <!-- Custom Browsers Color Start -->
  <meta name="theme-color" content="#000">
  <!-- Custom Browsers Color End -->

  <link rel="stylesheet" href="/css/style.min.css">
  <script defer src="/libs/fontawesome/all.min.js"></script>

</head>

<body>

  <!-- Custom HTML -->

  <section class="top-line">
    <div class="container">
      <div class="row no-gutters justify-content-between align-items-center">

        <div class="col-6">

          <ul class="top-line__item-list row no-gutters align-items-center">
            <li class="top-line__item col-4"><a href="tel:+7(905)253-93-13"><span class="top-line__item-icon"><i
                    class="fas fa-phone"></i></span>+7(905)253-93-13</a></li>
            <li class="top-line__item col-4"><a href="#"><span class="top-line__item-icon"><i
                    class="far fa-comment"></i></span>WatsApp, Viber</a></li>
            <li class="top-line__item col-4"><a href="#"><span class="top-line__item-icon"><i
                    class="fas fa-globe"></i></span>Русский</a></li>
          </ul>

        </div>

        <div class="col-2">
          <div class="social row no-gutters justify-content-between">

            <div class="social__item">
              <a href="#"><i class="fab fa-vk fa-lg"></i></a>
            </div>

            <div class="social__item">
              <a href="#"><i class="fab fa-facebook-f fa-lg"></i></a>
            </div>

            <div class="social__item">
              <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
            </div>

            <div class="social__item">
              <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>



  <header class="header">
    <?=HeaderTop($db, 1);?>

    <div class="container">
      <div class="row justify-content-between align-items-baseline">

        <div class="logo col-2">
          <span>LOGO</span>
        </div>

        <nav class="main-mnu col-7">

          <ul class="main-mnu__items">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Туры</a></li>
            <li><a href="#">Трансфер</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Советы туристам</a></li>
          </ul>

        </nav>

      </div>
    </div>
    

    <!-- <div class="header__content"> -->

    <div class="container">
      <div class="row justify-content-center">

        <h1 class="header__main-heading">туры по cанкт-петербургу</h1>
        <div class="w-100"></div>

        <p class="header__text header__text--align--center">Индивидуальные городские туры на комфортном автомобиле
          бизнес класса</br>
          Сделайте свою поездку в Санкт-Петербург незабываемой , вместе с команией StPeterCityTrip</p>
        <div class="w-100"></div>

        <button class="button">Начать</button>

      </div>
    </div>

    <!-- </div> -->

  </header>



  <section class="sect sect--tours">

    <h2 class="sect__heading">Awesome Heading</h2>

    <div class="container">
      <div class="sect__items-wrapper row">

        <div class="col-4">

          <a href="#">
            <div class="sect-item">

              <img src="/img/item1.jpg" class="img-responsive sect-item__img" alt="Безвизовые круизы">
              <h3 class="sect-item__img-subscription">Безвизовые круизы</h3>

            </div>
          </a>

        </div>

        <div class="col-4">

          <a href="#">
            <div class="sect-item">

              <img src="/img/item2.jpg" class="img-responsive sect-item__img" alt="Комплексные туры">
              <h3 class="sect-item__img-subscription">Комплексные туры</h3>

            </div>
          </a>

        </div>

        <div class="col-4">

          <a href="#">
            <div class="sect-item">

              <img src="/img/item3.jpg" class="img-responsive sect-item__img" alt="Тур по каналам">
              <h3 class="sect-item__img-subscription">Тур по каналам</h3>

            </div>
          </a>

        </div>

      </div>

      <a href="#">
        <div class="row justify-content-center align-items-center">

          <p>Смотреть все</p>
          <div class="arrow">

          </div>

        </div>
      </a>

    </div>

  </section>



  <section class="sect sect--about">

    <h2 class="sect__heading">Awesome Heading</h2>

    <div class="container">
      <div class="sect__items-wrapper row">

        <div class="col-6">

          <div class="sect-item">

            <img src="/img/kazanskij.jpg" class="img-responsive" alt="Казанский собор">
            
          </div>

        </div>

        <div class="col-6">

          <div class="sect-item">

            <h3 class="">Lorem ipsum consectetur</h3>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            
          </div>

        </div>

  </section>



  <section class="benefits">

  </section>



  <section class="parallax">

  </section>



  <section class="get-in-touch">

  </section>



  <footer class="footer">

  </footer>


  <script src="/js/scripts.min.js"></script>

</body>

</html>