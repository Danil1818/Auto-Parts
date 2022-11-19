<?php session_start() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/search.css">
	<title>Деталі</title>
</head>
<body>
	<div class="wrapper">
		<?php include 'includes/header.php' ?>
		<main class="main">
			<div class="container">
				<!-- Header -->
    		<?php include 'includes/navigation.php' ?>

    		<div class="table-responsive">
    			<!-- Table -->
					<table>
						<thead>
							<h2 class="title">Деталі</h2>
							<tr>
								<th>Категорія</th>
								<th>Машина</th>
								<th>Номер</th>
								<th>Кількість</th>
								<th>Ціна</th>
							</tr>
						</thead>
						<?php
							include 'includes/db.php';

							if (isset($_POST['submit'])) {

							$search = $_POST['search'];

							$query = mysqli_query(
								$connect, 
								"SELECT cars.c_id, cars.c_title, title.t_title, data.d_id, data.d_serial_number, data.d_count, data.d_price 
								FROM data 
								JOIN cars ON data.d_car_id = cars.c_id 
								JOIN title ON data.d_type_id = title.t_id
								WHERE `d_serial_number` LIKE '%$search%'
							");
							$query = mysqli_fetch_all($query);

							foreach ($query as $q) {
								?>
								<tbody>
									
									<tr>
										<td><?= $q[2] ?></td>
										<td><?= $q[1] ?></td>
										<td><?= $q[4] ?></td>
										<td><?= $q[5] ?></td>
										<td><?= $q[6] ?>$</td>
										<?php
											if ($_SESSION['user']) {
												?>
												<td>
													<a class="update__link" href="update.php?id=<?=  $q[3] ?>&carId=<?= $q[0]?>">Оновити</a>
												</td>
												<td>
													<a href="includes/delete.php?id=<?=$q[3]?>&carId=<?=$q[0]?>" class="delete__link">Видалити</a>
												</td>
									</tr>
								</tbody>
									<?php
									}
								?>
								<?php
								}
							}
						?>
					</table>
    		</div>
			</div>
		</main>
		<?php include 'includes/footer.php' ?>	
	</div>
	<script src="js/index.js"></script>
</body>
</html>
