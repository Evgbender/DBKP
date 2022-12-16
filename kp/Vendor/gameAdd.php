<?php

require_once '../Config/connect.php';
$champs = mysqli_query($connect,"SELECT * FROM `championships`");
$champs = mysqli_fetch_all($champs);
$stages = mysqli_query($connect,"SELECT * FROM `stage`");
$stages = mysqli_fetch_all($stages);
$plrs = mysqli_query($connect,"SELECT * FROM `players`");
$plrs = mysqli_fetch_all($plrs);
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
    <p class="PlNameP">Game Creation</p>


</div>

<div class="topMenu">
    <a href="../index.php" class="menuA"><div class="menuParts"><div class="innerUs">Users</div></div></a>
    <a href="../championships.php" class="menuA"><div class="menuParts" style="float: right"><div class="innerChamp">Championships</div></div></a>
</div>

<form style="display: inline-block" action="gameCreate.php?chid=<?=$_GET['chid'] ?>" method="post" >
    <label for="stgArea">Choose stage</label>
    <select id="stgArea" name="stag">
        <?php
        foreach ($stages as $stg)
        {
            ?>
            <option value=<?=$stg[0]?>><?=$stg[1]?></option>
            <?php
        }
        ?>
    </select>
    <label for="winArea">Winner</label>
    <select id="winArea" name="idw">
        <?php
        foreach ($plrs as $plr)
        {
            ?>
            <option value=<?=$plr[0]?>><?=$plr[1]?></option>
            <?php
        }
        ?>
    </select>
    <label for="loseArea">Loser</label>
    <select id="loseArea" name="idl">
        <?php
        foreach ($plrs as $plr)
        {
            ?>
            <option value=<?=$plr[0]?>><?=$plr[1]?></option>
            <?php
        }
        ?>
    </select>
    <input type="submit" value="Create">


</form>

</body>
</html>
