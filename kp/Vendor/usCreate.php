<?php
require_once '../Config/connect.php';

$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$rank=$_POST['rank'];
$winam=$_POST['winam'];
$losam=$_POST['losam'];
mysqli_query($connect, "INSERT INTO `players` (`id_players`, `player_name`, `player_age`, `player_email`, `rank`, `wins_am`, `loses_am`) VALUES (NULL, '$name', '$age', '$email', '$rank', '$winam', '$losam')");
header("Location: ".$_SERVER['HTTP_REFERER']);