<?php session_start() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Головна</title>
</head>

<body>
  <div class="wrapper">
    <!-- Nav -->
    <?php include 'includes/header.php' ?>
    <!-- Header -->
    <?php include 'includes/navigation.php' ?>

    <!-- Main -->
    <main class="main">
      <!-- Intro -->
      <section class="intro">
        <div class="container">
          <div class="inner__intro">
            <!-- <button class="intro__filter-btn">Фильтр</button> -->
            <div class="intro__slider-wrap">
              <div class="intro__slider">
                <div class="intro__slider-track">
                  <img src="img/audi.jpg" alt="" class="intro__slider-img" />
                  <img src="img/sklad.jpg" alt="" class="intro__slider-img" />
                  <img src="img/wp4043155.webp" alt="" class="intro__slider-img" />
                </div>
              </div>
              <div class="slider__btns">
                <button class="slider__prev"></button>
                <button class="slider__next"></button>
              </div>
            </div>
            <div class="intro__info">
              <div class="inner__info">
                <div class="inner__info-item">
                  <img src="img/intro-icon.webp" alt="" class="info__icon">
                  <p class="info__item-title">Спецпропозиції</p>
                </div>
                <div class="inner__info-item">
                  <img src="img/intro-icon-2.webp" alt="" class="info__icon">
                  <p class="info__item-title">Гарантія якості</p>
                </div>
                <div class="inner__info-item">
                  <img src="img/intro-icon-3.webp" alt="" class="info__icon">
                  <p class="info__item-title">Асортимент</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact -->
      <section class="contact">
        <div class="container">
          <div class="inner__contact">
            <h2 class="contact__title">Про компанію</h2>
            <p class="contact__text">
              "125-5-125" - компанія, що займається різним продажем Б/У запчастин, витратних матеріалів, аксесуарів та комплектуючих для автомобілів іноземного виробництва. У нашому асортименті продукція провідних європейських, корейських, японських марок, а також великий вибір неоригінальних автомобільних запчастин.
            </p>
          </div>
        </div>
      </section>
    </main>
    <!-- Main -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
  </div>


  <script src="https://kit.fontawesome.com/fa2b2fe3ca.js" crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
</body>

</html>