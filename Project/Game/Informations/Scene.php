<?php 
class Scene{
    var $scene_id = 0;
    var $scene_name = "default";
    var $context = "default";

    function __construct($id,$scene_name,$context){
        $this->scene_id = $id;
        $this->scene_name = $scene_name;
        $this->context = $context;
    }
}

?>