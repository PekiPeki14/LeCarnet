<?php include "../Shared/head.php" ?>
<?php include "../Ressources/Const/const_infos.php" ?>
<?php include "../Data/data_manipulation.php" ?>
<?php $players = DataManipulation::getPlayers() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo _GAMENAME_ ?> - Jouer</title>
</head>
<body>
    <h1> Selectionnez une partie </h1>
    <div id="select">
        <?php
        foreach ($players as $player) {
            $playerCaseName = "Emplacement Vide";
            $playerIsEmpty = "true";
            if($player->name != null){
                $playerCaseName = $player->name;
                $playerIsEmpty = "false";
            }
            echo "<div class='gameButton' onclick='showPopup(".$player->id.",".$playerIsEmpty.")' id='socle'".$player->id.">";
                echo "<p>".$playerCaseName."</p>";
            echo "</div>";
        }
        ?>
    </div>
    <div class="popupInfo" id="popup"></div>
</body>
</html>