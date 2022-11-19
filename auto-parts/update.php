<?php 
	session_start();
	include 'includes/db.php';

	$car_id = $_GET['id'];
	$test_id = $_GET['carId'];
	$car_data = mysqli_query($connect, "SELECT * FROM `cars` WHERE `c_id` = '$test_id'");
	$car = mysqli_query($connect, "SELECT cars.c_title, title.t_title, data.d_id, data.d_serial_number, data.d_count, data.d_price 
		FROM data 
		JOIN cars ON data.d_car_id = cars.c_id 
		JOIN title ON data.d_type_id = title.t_id
		WHERE data.d_id = '$car_id'");
	$car = mysqli_fetch_assoc($car);
	$car_data = mysqli_fetch_assoc($car_data);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/update.css">
	<title>Оновлення</title>
</head>
<body>
	<div class="wrapper">
		<?php include 'includes/header.php' ?>

		<main class="crud">
			<div class="container">
				<div class="crud">
					<form action="includes/update.php" method="post" class="crud__form">
						<h2 class="crud__title">Оновлення</h2>
						<input type="hidden" name="id" value="<?= $car['d_id'] ?>">
						<input type="hidden" name="id_car" value="<?= $car_data['c_id'] ?>">
						<label for="title">Категорія</label>
						<input name="title" id="title" class="crud__form-title" value="<?= $car['t_title'] ?>">
						<label for="car">Машина</label>
						<input type="text" id="car" name="car" value="<?= $car['c_title'] ?>">
						<label for="number">Номер</label>
						<input type="text" id="number" name="number" value="<?= $car['d_serial_number'] ?>">
						<label for="count">Кількість</label>
						<input type="number" id="count" name="count" value="<?= $car['d_count'] ?>">
						<label for="price">Ціна</label>
						<input type="number" id="price" name="price" value="<?= $car['d_price'] ?>">
						<button class="update__btn" name="submit" type="submit">Застосувати</button>
					</form>
				</div>
			</div>
		</main>

		<!-- Footer -->
		<?php include 'includes/footer.php' ?>
	</div>

	<script src="js/index.js"></script>
</body>
</html>