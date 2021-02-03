<?php include $_SERVER["DOCUMENT_ROOT"]."/Shared/head.php" ?>
<?php include $_SERVER["DOCUMENT_ROOT"]."/Ressources/Const/const_infos.php" ?>
<?php include $_SERVER["DOCUMENT_ROOT"]."/Data/data_manipulation.php" ?>
<?php 
    if(isset($_SESSION['player_id']) && isset($_SESSION['scene_id'])){
        $scene = DataManipulation::get_scene($_SESSION['scene_id']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo _GAMENAME_ ?> - <?php echo $scene->scene_name ?> </title>
</head>
<body>
    <?php
        if(isset($scene)){
            echo "<h1>Scene ".$scene->scene_id." - ".$scene->scene_name."</h1>";
        }
    ?>
</body>
</html>