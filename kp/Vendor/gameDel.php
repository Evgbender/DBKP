<?php
require_once '../Config/connect.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM `games` WHERE `id_game`='$id'");
header("Location: ".$_SERVER['HTTP_REFERER']);