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


<div class="topMenu">
    <a href="../index.php" class="menuA"><div class="menuParts"><div class="innerUs">Users</div></div></a>
    <a href="../championships.php" class="menuA"><div class="menuParts" style="float: right"><div class="innerChamp">Championships</div></div></a>
</div>

<div class="addPlate">
    <a href="gameAdd.php?chid=<?=$_GET['id']?>"><p class="addBut">+ Add</p></a>
</div>

<div class="listPlot">
    <p class="ucRows1" style="border-color: white"><span style="display: inline-block">Stage</span></p><p style="display: inline-block;float: right; position: absolute; right: 25%; padding: 2% 0; width: 40%; font-family: Bahnschrift;font-size: medium"><span style="display: inline-block; font-size: x-large; font-weight: bold; font-family: Bahnschrift">Winner</span><span style="display: inline-block; float: right;font-size: x-large;font-weight: bold; font-family: Bahnschrift">Loser</span></p><br>
    <?php
    $champ=$_GET['id'];
    $games=mysqli_query($connect,"SELECT `quer1`.`StNm`,`quer1`.`PlWnNm`,`players`.`player_name`,`quer1`.`IdG` FROM (
	                                        SELECT `games`.`id_game` as `IdG`,`stage`.`stage_name` as `StNm`, `players`.`player_name` as `PlWnNm`,`games`.`id_pl_lose` as `IdPlLs`, `games`.`id_stage` as `StId` FROM `games` 
		                                        INNER JOIN `stage` 
			                                        ON `games`.`id_stage`= `stage`.`id_stage` 
		                                        INNER JOIN `players` 
			                                        ON `games`.`id_pl_win`= `players`.`id_players` 
		                                        WHERE `games`.`id_champiomship`='$champ'
                                                                                                            ) as `quer1` 
	                                        INNER JOIN `players` 
		                                        ON `quer1`.`IdPlLs`= `players`.`id_players` 
	                                        ORDER BY `quer1`.`StId`");
    $games=mysqli_fetch_all($games);
    foreach ($games as $game){
    ?>
        <p class="ucRows1"><span style="display: inline-block"><?=$game[0] ?></span></p><p style="display: inline-block;float: right; position: absolute; right: 25%; padding: 2% 0; width: 40%; font-family: Bahnschrift;font-size: medium"><span style="display: inline-block"><?=$game[1] ?></span><span style="display: inline-block; float: right"><?=$game[2] ?></span></p> <a href="gameDel.php?id=<?=$game[3] ?>"><p class="delBut1">X</p><br></a>

        <?php
    }
    ?>
</div>






</body>

</html>