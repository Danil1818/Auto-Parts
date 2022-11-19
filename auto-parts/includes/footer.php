<footer class="footer">
  <div class="container">
    <div class="inner__footer">
      <a href="index.php" class="footer__logo">
        <img src="img/logo.png" alt="" class="footer__logo-img" />
        <p class="footer__logo-title">
          Avtovostok
        </p>
      </a>
      <ul class="footer__list">
        <li class="footer__list-item">
          <a href="https://www.google.com/maps/place/%D0%A5%D0%BE%D1%80%D0%BE%D0%BB%D1%8C%D1%81%D1%8C%D0%BA%D0%B0+%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F,+44,+%D0%9A%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D1%87%D1%83%D0%BA,+%D0%9F%D0%BE%D0%BB%D1%82%D0%B0%D0%B2%D1%81%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+39600/@49.0814914,33.4173714,16z/data=!4m5!3m4!1s0x40d752e2fc149df7:0xa7ed4e5318dfb28a!8m2!3d49.082188!4d33.4175671">м.Кременчук</a>
        </li>
        <li class="footer__list-item"><a href="contact.php">Контакти</a></li>
        <li class="footer__list-item"><a href="about.php">Про нас</a></li>
        <li class="footer__list-item">+380671255125</li>
      </ul>
      <a class="footer__btn-singin" href="../auth.php">
        <img src="img/profile-user.png" alt="" class="footer__btn-icon" /> 
        <?php 
          if ($_SESSION['user']) {
            echo $_SESSION['user']['login'];
          } else {
            echo '<p>Вхід</p>';
          }
        ?>
      </a>
    </div>
  </div>
</footer>