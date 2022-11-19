<?php

$connect = mysqli_connect("localhost", "root", "root", "mysitef1_cars");

if (!$connect) {
  die("Error, connect to Data Base!");
}