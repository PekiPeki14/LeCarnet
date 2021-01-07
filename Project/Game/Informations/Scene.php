<?php 
include "../Data/data_manipulation.php";
class Scene{
    var $scene_id = 0;
    var $scene_name = "default";

    function __construct($id){
        DataManipulation::readJson();
        $this->scene_id = $id;
    }
}

?>