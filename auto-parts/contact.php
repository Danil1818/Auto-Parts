<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact.css">
	<title>Контакти</title>
</head>
<body>
	<div class="wrapper">
		<!-- Nav -->
		<?php include 'includes/header.php' ?>
		<!-- Header -->
    <?php include 'includes/navigation.php' ?>

    <main class="main">
    	<div class="container">
    		<section class="contact">
					<div class="inner__contact">
						<p class="contact__title">Контакти</p>
						<ul class="contact__list">
							<li class="contact__list-item">
								<p class="contact__list-item-title">Телефон</p>
								<p class="contact__list-item-text">+380671255125</p>
							</li>
							<li class="contact__list-item">
								<p class="contact__list-item-title">Почта</p>
								<p class="contact__list-item-text">shaten73@gmail.com</p>
							</li>
							<li class="contact__list-item">
								<p class="contact__list-item-title">Адрес</p>
								<p class="contact__list-item-text">39600 г.Кременчуг Хорольська вулиця, 44</p>
							</li>
							<li class="contact__list-item">
								<p class="contact__list-item-title">Режим роботи</p>
								<p class="contact__list-item-text">пн-пт. 9-00 - 17-00 Киев</p>
							</li>
							<li class="contact__list-item">
								<p class="contact__list-item-title">Директор</p>
								<p class="contact__list-item-text">+380671255125</p>
							</li>
						</ul>
					</div>
				</section>
    	</div>
    </main>

		<?php include 'includes/footer.php' ?>
	</div>

	<script src="js/index.js"></script>
</body>
</html>