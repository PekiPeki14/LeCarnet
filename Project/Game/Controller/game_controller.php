<?php require_once $_SERVER["DOCUMENT_ROOT"]."/Data/data_manipulation.php" ?>

<?php
method_selection();

function method_selection(){
    $function_name;
    if(isset($_GET["functionName"])){
        $function_name = $_GET["functionName"];
        $arguments = null;
        if(isset($_GET["arguments"])){
            $arguments = $_GET["arguments"];
        }
        switch ($function_name) {
            case 'getSceneInfo':
                get_scene_info($arguments);
                break;
            case 'launchGame':{
                launch($arguments["player_id"], $arguments["scene_id"]);
            }
            default:
                # code...
                break;
        }
    }
}

function get_scene_info(int $scene_id){
    echo json_encode(DataManipulation::get_scene($scene_id));
}

function launch(int $player_id, int $scene_id){
    session_start();

    $_SESSION['player_id'] = $player_id;
    $_SESSION['scene_id'] = $scene_id;

    if(isset($_SESSION['player_id']) && isset($_SESSION['scene_id'])){
        echo json_encode("OK");
    }else{
        echo json_encode("Fail");
    }
}
?>