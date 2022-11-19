<?php 
	include 'db.php';

	$id = $_POST['id'];
	$id_car = $_POST['id_car'];
	$title = $_POST['title'];
	$car = $_POST['car'];
	$number = $_POST['number'];
	$count = $_POST['count'];
	$price = $_POST['price'];

	mysqli_query($connect, "UPDATE `cars` SET `c_title` = '$car' WHERE `cars`.`c_id` = '$id_car'");

	mysqli_query($connect, "UPDATE `data` SET `d_serial_number` = '$number', `d_count` = '$count', `d_price` = $price WHERE `data`.`d_id` = '$id'");


	if(isset($_POST['submit'])) {
		
		header("Location: ../search.php");

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

		foreach($query as $q) {
			?>
			<tr>
				<td><?= $q[3] ?></td>
				<td><?= $q[2] ?></td>
				<td><?= $q[0] ?></td>
				<td><?= $q[1] ?></td>
				<td><?= $q[4] ?></td>
				<td><?= $q[5] ?></td>
				<td><?= $q[6] ?></td>
			</tr>
			<?php
		}
	}
