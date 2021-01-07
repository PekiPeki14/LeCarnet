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
            echo "<div class='gameButton' onclick='showPopup(".json_encode($player).",".$playerIsEmpty.")' id='socle'".$player->id.">";
                echo "<p>".$playerCaseName."</p>";
            echo "</div>";
        }
        ?>
    </div>
    <div data-pop="slide-down" class="popupInfo" id="popup">
        <h1 id="popupInfoTitle"></h1>
        <p id="popupInfoSubTitle"></h1>
        <div class="buttonGroup" id="popupButtonGroup">
        </div>
    </div>
    <div id="overlay" onclick="closePopup()"></div>
</body>
</html>