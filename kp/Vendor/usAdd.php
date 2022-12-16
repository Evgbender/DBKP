<?php

require_once '../Config/connect.php';
$PlayerRanks = mysqli_query($connect,"SELECT * FROM `rank`");
$playerRanks = mysqli_fetch_all($PlayerRanks);
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
    <p class="PlNameP">User Creation</p>


</div>

<div class="topMenu">
    <a href="../index.php" class="menuA"><div class="menuParts"><div class="innerUs">Users</div></div></a>
    <a href="../championships.php" class="menuA"><div class="menuParts" style="float: right"><div class="innerChamp">Championships</div></div></a>
</div>

<form style="display: inline-block" action="usCreate.php" method="post" >
    <label for="nameArea">Write Name</label>
    <br>
    <input type="text" id="nameArea" name="name">
    <br><br>
    <label for="ageArea">Write age</label>
    <br>
    <input type="number" id="ageArea" name="age">
    <br><br>
    <label for="emailArea">Write email</label>
    <br>
    <input type="email" id="emailArea" name="email">
    <br><br>
    <label for="rankArea">Choose rank</label>
    <br>
    <select id="rankArea" name="rank">
        <?php
        foreach ($playerRanks as $pr)
        {
            ?>
            <option value=<?=$pr[0]?>><?=$pr[1]?></option>
            <?php
        }
        ?>
    </select>
    <br><br>

    <label for="winsArea">Write wins amount</label>
    <br>
    <input type="number" id="winsArea" name="winam">
    <br><br>

    <label for="losesArea">Write loses amount</label>
    <br>
    <input type="number" id="losesArea" name="losam">
    <br><br>
    <input type="submit" value="Create">

</form>

</body>
</html>
