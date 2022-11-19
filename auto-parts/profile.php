<?php
	session_start();
	if (!$_SESSION['user']) {
  	header('Location: auth.php');
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/profile.css">
	<title>Профіль</title>
</head>
<body>
	<div class="wrapper">
		<!-- Nav -->
		<?php include 'includes/header.php' ?>

		<main class="profile">
			<div class="container">
				<?php include 'includes/navigation.php'; ?>
				<div class="inner__profile">
					<h1>Доброго дня, <?= $_SESSION['user']['login'] ?></h1>
					<a href="#" class="email"><?= $_SESSION['user']['email'] ?></a>
					<a href="includes/logout.php" class="logout">Вихід</a>
				</div>
			</div>
		</main>

		<section class="crud">
			<div class="container">
				<div class="crud">
					<form action="includes/create.php" method="post" class="crud__form">
						<h2 class="crud__title">Редагування</h2>
						<label for="title">Категорія</label>
						<select name="title" id="title" class="crud__form-title">
							<?php
								include 'includes/db.php';

								$query = mysqli_query($connect, "SELECT * FROM `title`");
								$query = mysqli_fetch_all($query);

								foreach($query as $q) {
									?>

									<option><?= $q[1] ?></option>

									<?php
								}
							?>
						</select>
						<label for="create">Нова категорія</label>
						<input type="text" name="new_title" id="create" class="create__categori" placeholder="Додати нову категорію" min="3" max="50">
						<label for="car">Машина</label>
						<input type="text" id="car" name="car" placeholder="Назва машини">
						<label for="number">Номер</label>
						<input type="text" id="number" max="100" name="number" placeholder="Номер деталі">
						<label for="price">Ціна: $</label>
						<input type="numbers" id="price" max="10000" name="price" placeholder="Ціна деталі">
						<label for="count">Кількість</label>
						<input type="number" id="count" name="count" value="1" min="1" max="100" placeholder="Кількість деталей">
						<button type="submit" name="add" class="add__btn">Додати</button>
						<?php 
            	if($_SESSION['message'] != '') {
              	echo '<p class="error__message">' . $_SESSION['message'] . '</p>';
            	}
            	unset($_SESSION['message']);
          	?>
					</form>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<?php include 'includes/footer.php' ?>
	</div>

	<script src="js/index.js"></script>
</body>
</html>