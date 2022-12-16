<?php
require_once '../Config/connect.php';
$name = $_GET['name'];
$playerInfo = mysqli_query($connect,"SELECT * FROM `players` WHERE `player_name`='$name'");
$playerInfo = mysqli_fetch_all($playerInfo);
$PlayerRank = $playerInfo[0][4];
$PlayerRanks = mysqli_query($connect,"SELECT * FROM `rank`");
$playerRanks = mysqli_fetch_all($PlayerRanks);
$PlayerRank = mysqli_query($connect,"SELECT * FROM `rank` WHERE `id_rank`='$PlayerRank'");
$playerRank = mysqli_fetch_all($PlayerRank);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/KP.css">
        <meta charset="UTF-8">
        <title>KP</title>
    </head>
    <body>
    <div class="topMenu">
        <a href="../index.php" class="menuA"><div class="menuParts"><div class="innerUs">Users</div></div></a>
        <a href="../championships.php" class="menuA"><div class="menuParts" style="float: right"><div class="innerChamp">Championships</div></div></a>
    </div>

    <div class="PlNameId">
            <p class="PlNameP"><?=$playerInfo[0][1] ?></p>
            <p class="PlNameP" style="margin-left: 5%;font-weight: normal">ID: <?=$playerInfo[0][0] ?></p>

    </div>
    <p style="display: inline-block">Age: <?=$playerInfo[0][2] ?> <button type="button" onclick="document.getElementById('ageForm').style.visibility = 'visible';document.getElementById('emailForm').style.visibility = 'hidden';document.getElementById('rankForm').style.visibility = 'hidden';document.getElementById('winsForm').style.visibility = 'hidden';document.getElementById('losesForm').style.visibility = 'hidden'">Update</button></p>
    <form style="display: inline-block; visibility: hidden" id="ageForm" action="user_update.php?id=<?=$playerInfo[0][0] ?>&colName=player_age" method="post" >
        <label for="ageArea">Write new age</label>
        <input type="number" id="ageArea" name="val">
        <input type="submit" value="Update">
    </form><br>
    <p style="display: inline-block">Email: <?=$playerInfo[0][3] ?> <button type="button" onclick="document.getElementById('ageForm').style.visibility = 'hidden';document.getElementById('emailForm').style.visibility = 'visible';document.getElementById('rankForm').style.visibility = 'hidden';document.getElementById('winsForm').style.visibility = 'hidden';document.getElementById('losesForm').style.visibility = 'hidden'">Update</button></p>
    <form style="display: inline-block; visibility: hidden" id="emailForm" action="user_update.php?id=<?=$playerInfo[0][0] ?>&colName=player_email" method="post" >
        <label for="emailArea">Write new email</label>
        <input type="email" id="emailArea" name="val">
        <input type="submit" value="Update">
    </form><br>
    <p style="display: inline-block">Rank: <?=$playerRank[0][1] ?> <button type="button" onclick="document.getElementById('ageForm').style.visibility = 'hidden';document.getElementById('emailForm').style.visibility = 'hidden';document.getElementById('rankForm').style.visibility = 'visible';document.getElementById('winsForm').style.visibility = 'hidden';document.getElementById('losesForm').style.visibility = 'hidden'">Update</button></p>
    <form style="display: inline-block; visibility: hidden" id="rankForm" action="user_update.php?id=<?=$playerInfo[0][0] ?>&colName=rank" method="post" >
        <label for="rankArea">Write new rank</label>
        <select id="rankArea" name="val">
            <?php
                foreach ($playerRanks as $pr)
                {
                    ?>
            <option value=<?=$pr[0]?>><?=$pr[1]?></option>
            <?php
                }
            ?>
        </select>


        <input type="submit" value="Update">
    </form><br>
    <p style="display: inline-block">Wins: <?=$playerInfo[0][5] ?> <button type="button" onclick="document.getElementById('ageForm').style.visibility = 'hidden';document.getElementById('emailForm').style.visibility = 'hidden';document.getElementById('rankForm').style.visibility = 'hidden';document.getElementById('winsForm').style.visibility = 'visible';document.getElementById('losesForm').style.visibility = 'hidden'">Update</button></p>
    <form style="display: inline-block; visibility: hidden" id="winsForm" action="user_update.php?id=<?=$playerInfo[0][0] ?>&colName=wins_am" method="post" >
        <label for="winsArea">Write new wins amount</label>
        <input type="number" id="winsArea" name="val">
        <input type="submit" value="Update">
    </form><br>
    <p style="display: inline-block">Loses: <?=$playerInfo[0][6] ?> <button type="button" onclick="document.getElementById('ageForm').style.visibility = 'hidden';document.getElementById('emailForm').style.visibility = 'hidden';document.getElementById('rankForm').style.visibility = 'hidden';document.getElementById('winsForm').style.visibility = 'hidden';document.getElementById('losesForm').style.visibility = 'visible'">Update</button></p>
    <form style="display: inline-block; visibility: hidden" id="losesForm" action="user_update.php?id=<?=$playerInfo[0][0] ?>&colName=loses_am" method="post" >
        <label for="losesArea">Write loses amount</label>
        <input type="number" id="losesArea" name="val">
        <input type="submit" value="Update">
    </form>




    </body>



</html>