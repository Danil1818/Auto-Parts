<?php 
  session_start();

  if ($_SESSION['user']) {
    header('Location: profile.php');
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Вхід</title>
</head>
<body>
	<div class="wrapper">
     <!-- Nav -->
    <?php include 'includes/header.php' ?>
    <!-- Form -->
    <section class="singin">
      <div class="container">
        <form action="includes/singin.php" method="post" class="singin__form">
          <p class="form__title">Увійдіть у профіль</p>
          <input type="text" name="login" class="form__input-email" placeholder="Введіть логін">
          <input type="password" name="password" class="form__input-password" placeholder="Введіть пароль">
          <button class="form__btn-submit" type="submit">Увійти</button>
          <?php 
            if($_SESSION['message'] != '') {
              echo '<p class="error__message">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
          ?>
          </form>
      </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?> 
  </div>

	<script src="js/index.js"></script>
</body>
</html>