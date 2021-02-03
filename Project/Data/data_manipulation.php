<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/Game/Informations/Player.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/Game/Informations/Scene.php";
class DataManipulation{

    private static $instance;
    private static $json_data = null;

    private function __construct(){}

    static function getPlayers(){
        $json_data = self::decodeJson();
        $player_list = array();
        foreach ($json_data['Users'] as $p) {
            $player = new Player($p['id'],$p['name'],$p['scene_id'],$p['historique']);
            $player_list[] = $player;
        }
        return $player_list;
    }

    static function get_scene(int $scene_id){
        $json_data = self::decodeJson();
        foreach ($json_data['Scenes'] as $s) {
            if($s['id'] == $scene_id){
                $scene = new Scene($s['id'],$s['name'],$s['contexte']);
                return $scene;
            }
        }
        //return $scene;
    }

    private static function decodeJson(){
        // Read JSON file - Url définie selon l'endroit où se situe les classes Scene et Player
        $json = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/Data/game.json");

        //Decode JSON
        return json_decode($json,true);
    }
}
?>