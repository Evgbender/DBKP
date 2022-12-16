<?php

require_once '../Config/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/KP.css">
    <meta charset="UTF-8">
    <title>KP</title>
</head>

<body>
<div class="PlNameId">
    <p class="PlNameP">Championship Creation</p>


</div>

<div class="topMenu">
    <a href="../index.php" class="menuA"><div class="menuParts"><div class="innerUs">Users</div></div></a>
    <a href="../championships.php" class="menuA"><div class="menuParts" style="float: right"><div class="innerChamp">Championships</div></div></a>
</div>

<form style="display: inline-block" action="champCreate.php" method="post" >
    <label for="nameArea">Write championship name</label>
    <br>
    <input type="text" id="nameArea" name="name">
    <br><br>
    <label for="prizeArea">Write prize</label>
    <br>
    <input type="number" id="prizeArea" name="prize">
    <br><br>
    <input type="submit" value="Create">

</form>

</body>
</html>
