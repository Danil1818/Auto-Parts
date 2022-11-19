<?php
	session_start();
	include 'db.php';

	$title = $_POST['title'];
	$new_title = $_POST['new_title'];
	$car = $_POST['car'];
	$number = $_POST['number'];
	$price = $_POST['price'];
	$count = $_POST['count'];

	if ($car != '') {

		if ($new_title != '') {

			if ($new_title == $title) {
				echo "Error: Hello World";
			} else {
				mysqli_query($connect, "INSERT INTO `cars` (`c_id`, `c_title`) VALUES (NULL, '$car')");

				$car_id = mysqli_insert_id($connect);

				mysqli_query($connect, "INSERT INTO `title` (`t_id`, `t_title`) VALUES (NULL, '$new_title')");

				$new_title_id = mysqli_insert_id($connect);

				mysqli_query(
					$connect, 
					"INSERT INTO `data` (`d_id`, `d_type_id`, `d_car_id`, `d_serial_number`, `d_count`, `d_price`) 
					VALUES (NULL, '$new_title_id', '$car_id', '$number', '$count', '$price')"
				);
			}

			// $_SESSION['message'] = 'Произошла ошибка!';
		} else {

			mysqli_query($connect, "INSERT INTO `cars` (`c_id`, `c_title`) VALUES (NULL, '$car')");

			$car_id = mysqli_insert_id($connect);

			$title_id = mysqli_query($connect, "SELECT `t_id` FROM `title` WHERE t_title='$title'");
			$title_id = mysqli_fetch_assoc($title_id);


			mysqli_query(
				$connect, 
				"INSERT INTO `data` (`d_id`, `d_type_id`, `d_car_id`, `d_serial_number`, `d_count`, `d_price`) 
				VALUES (NULL, '$title_id[t_id]', '$car_id', '$number', '$count', '$price')"
			);

			$_SESSION['message'] = 'Деталь успішно додана! <a style="text-decoration: underline;" href="../search.php">Подивитись</a>';
		}
	} else {
		$_SESSION['message'] = 'Виникла помилка!';
	}


	header('Location: ../profile.php');