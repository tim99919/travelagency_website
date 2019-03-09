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
            <li class="top-line__item col-4"><a href="tel:+7(905)253-93-13"><span class="top-line__item-icon"><i class="fas fa-phone"></i></span>+7(905)253-93-13</a></li>
            <li class="top-line__item col-4"><a href="#"><span class="top-line__item-icon"><i class="far fa-comment"></i></span>WatsApp, Viber</a></li>
            <li class="top-line__item col-4"><a href="#"><span class="top-line__item-icon"><i class="fas fa-globe"></i></span>Русский</a></li>
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

    <!-- <div class="header__content"> -->
    
      <div class="container">
        <div class="row justify-content-center">

          <h1 class="header__main-heading">туры по cанкт-петербургу</h1>
          <div class="w-100"></div>
          
          <p class="header__text header__text--align--center">Индивидуальные городские туры на комфортном автомобиле бизнес класса</br>
          Сделайте свою поездку в Санкт-Петербург незабываемой , вместе с команией StPeterCityTrip</p>
          <div class="w-100"></div>

          <button class="button">Начать</button>

        </div>    
      </div>
    
    <!-- </div> -->

  </header>



  <section class="tours">
    <div class="gradient"></div>
  
    <h2 class="section-heading">Awesome Heading</h2>

    <div class="container">
      <div class="row">
      
        <div class="tours__item col-4">

          <img src="/img/item1.jpg" alt="Безвизовые круизы">
          
          <div class="tours__item-subscription">
            <p>Безвизовые круизы</p>
          </div>
        
        </div>
      
        <div class="tours__item col-4">

          <img src="/img/item2.jpg" alt="Комплексные туры">
          
          <div class="tours__item-subscription">
            <p>Комплексные туры</p>
          </div>
        
        </div>
      
        <div class="tours__item col-4">

          <img src="/img/item3.jpg" alt="Туры по каналам">
          
          <div class="tours__item-subscription">
            <p>Туры по каналам</p>
          </div>
        
        </div>
      
        
      
      </div>
    </div>

  </section>



  <section class="about">
  
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