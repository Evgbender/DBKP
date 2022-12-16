<?php
require_once '../Config/connect.php';
$name = $_GET['name'];
mysqli_query($connect,"DELETE FROM `championship` WHERE `champ_name`='$name'");
header("Location: ".$_SERVER['HTTP_REFERER']);
