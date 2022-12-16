<?php
require_once '../Config/connect.php';

$name=$_POST['name'];
$prize=$_POST['prize'];
mysqli_query($connect, "INSERT INTO `championship` (`id_championship`, `champ_name`, `prize_fond`) VALUES (NULL, '$name', '$prize')");
header("Location: ".$_SERVER['HTTP_REFERER']);