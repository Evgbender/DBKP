<?php

require_once '../Config/connect.php';

$val=$_POST['val'];
$column = $_GET['colName'];
$id = $_GET['id'];
mysqli_query($connect, "UPDATE `players` SET `$column`='$val' WHERE `id_players`='$id'");
header("Location: ".$_SERVER['HTTP_REFERER']);