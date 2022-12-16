<?php
require_once '../Config/connect.php';

$chmp=$_GET['chid'];
$stg=$_POST['stag'];
$idw=$_POST['idw'];
$idl=$_POST['idl'];
mysqli_query($connect, "INSERT INTO `games` (`id_game`, `id_champiomship`, `id_stage`, `id_pl_win`, `id_pl_lose`) VALUES (NULL, '$chmp', '$stg', '$idw', '$idl')");
header("Location: ".$_SERVER['HTTP_REFERER']);