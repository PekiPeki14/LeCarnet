<?php include "../Shared/head.php" ?>
<?php include "../Ressources/Const/const_infos.php" ?>
<?php include "Informations/Scene.php" ?>
<?php $scene = new Scene(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo _GAMENAME_ ?> - <?php echo $scene->scene_name ?> </title>
</head>
<body>
    <h1>Scene <?php echo $scene->scene_id ?> - <?php echo $scene->scene_name ?>  </h1>
</body>
</html>