<?php

  session_start();
  require_once 'db.php';

  $login = $_POST['login'];
  $password = $_POST['password'];

  $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

  if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
      'id' => $user['id'],
      'login' => $user['login'],
      'email' => $user['email'],
    ];

    header('Location: ../profile.php');

  } else {
    $_SESSION['message'] = 'Невірний логін або пароль!';
    header('Location: ../auth.php');
  }