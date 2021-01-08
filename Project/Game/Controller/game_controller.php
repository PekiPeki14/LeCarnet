<?php
method_selection();

function method_selection(){
    $function_name;
    if(isset($_GET["functionName"])){
        $function_name = $_GET["functionName"];
        switch ($function_name) {
            case 'getSceneInfo':
                get_scene_info();
                break;
            default:
                # code...
                break;
        }
    }
}

function get_scene_info(){
    echo json_encode("Get Scene Info - OK");
}
?>