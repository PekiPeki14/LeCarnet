<?php include $_SERVER["DOCUMENT_ROOT"]."/Shared/head.php" ?>
<?php include $_SERVER["DOCUMENT_ROOT"]."/Ressources/Const/const_infos.php" ?>
<?php include $_SERVER["DOCUMENT_ROOT"]."/Informations/Scene.php" ?>
<?php $scene = new Scene(23); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo _GAMENAME_ ?> - <?php echo $scene->scene_name ?> </title>
</head>
<body>
    <h1>Scene <?php echo $scene->scene_id ?> - <?php echo $scene->scene_name ?>  </h1>
</body>
</html>