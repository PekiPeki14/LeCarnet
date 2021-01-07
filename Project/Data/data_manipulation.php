<?php
require "../Game/Informations/Player.php";

class DataManipulation{

    static function readJson(){
        echo "JSON JSON";
        
        $json_data = self::decodeJson();
        //Print data
        var_dump($json_data);
    }

    static function getPlayers(){
        $json_data = self::decodeJson();
        $player_list = array();
        foreach ($json_data['Users'] as $player) {
            $player = new Player($player['id'],$player['name'],$player['scene_id'],$player['historique']);
            $player_list[] = $player;
        }
        return $player_list;
    }

    private static function decodeJson(){
        // Read JSON file - Url définie selon l'endroit où se situe les classes Scene et Player
        $json = file_get_contents("../Data/game.json");

        //Decode JSON
        return json_decode($json,true);
    }
}
?>