<?php
require_once '../Config/connect.php';
$name = $_GET['name'];
mysqli_query($connect,"DELETE FROM `players` WHERE `player_name`='$name'");
header("Location: ".$_SERVER['HTTP_REFERER']);