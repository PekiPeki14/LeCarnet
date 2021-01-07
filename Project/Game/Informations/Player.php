<?php
class Player{
    var $id = 0;
    var $name = "";
    var $current_scene_id = 0;
    var $historique = [];

    function __construct($id, $name, $current_scene_id, $historique){
        $this->id = $id;
        $this->name = $name;
        $this->current_scene_id = $current_scene_id;
        $this->historique = $historique;
    }
} 
?>