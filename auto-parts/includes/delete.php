<?php 

include 'db.php';

$id = $_GET['id'];
$carId = $_GET['carId'];

mysqli_query($connect, "DELETE FROM `data` WHERE `data`.`d_id` = '$id'");

mysqli_query($connect, "DELETE FROM `cars` WHERE `cars`.`c_id` = '$carId'");


header('Location: ../search.php');