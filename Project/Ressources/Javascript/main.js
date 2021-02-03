function setFullScreen(){
    var container = document.documentElement
    if (container.requestFullscreen) {
        container.requestFullscreen();
    } else if (container.webkitRequestFullscreen) { /* Safari */
        container.webkitRequestFullscreen();
    } else if (container.msRequestFullscreen) { /* IE11 */
        container.msRequestFullscreen();
    }
}

function showPopup(player,isEmpty){

    var popup = document.getElementById("popup");
    var popupTitle = document.getElementById("popupInfoTitle");
    var popupSubTitle = document.getElementById("popupInfoSubTitle");
    var buttonGroup = document.getElementById("popupButtonGroup");
    var overlay = document.getElementById("overlay");

    popup.className = "";
    overlay.className = "";

    var current_scene = 0;
    var player_id = player.id;

    if(!isEmpty){
        current_scene = player.current_scene_id;
        jQuery.ajax({
            type: "GET",
            url: '../Game/Controller/game_controller.php',
            dataType: 'json',
            data: {functionName: 'getSceneInfo', arguments: player.current_scene_id},
        
            success: function (response) {
                popupTitle.innerHTML = response.scene_name;
                popupSubTitle.innerHTML = response.context;
            }
        });
    }else{
        popupTitle.innerHTML = "Nouvelle Partie";
        popupSubTitle.innerHTML = "";
    }

    let children = Array.from(buttonGroup.children);
    for (let index = 0; index < children.length; index++) {
        const child = children[index];
        buttonGroup.removeChild(child)
    }

    var popupButtonPlay= document.createElement("button");
    popupButtonPlay.id = "playButton";
    popupButtonPlay.innerHTML = "JOUER"
    popupButtonPlay.addEventListener('click', function(){
    play(player_id,current_scene)}, false);

    var popupButtonDelete = document.createElement("button");
    popupButtonDelete.id = "deleteButton"
    popupButtonDelete.innerHTML = "Supprimer la partie"
    popupButtonDelete.addEventListener('click', function(){
    deleteGame(player_id)}, false);

    buttonGroup.appendChild(popupButtonPlay)
    buttonGroup.appendChild(popupButtonDelete)

    popup.className = "show";
    overlay.className = 'show';

}
function closePopup(){
    popup.className = "";
    overlay.className = "";
}
function play(player_id,current_scene){
    jQuery.ajax({
        type: "GET",
        url: '../Game/Controller/game_controller.php',
        dataType: 'json',
        data: {functionName: 'launchGame', arguments: {player_id : player_id, scene_id : current_scene}},
    
        success: function (response) {
            if(response == "OK"){
                window.location = "/Game/game.php";
            }
        }
    });
}

function deleteGame(player_id){
    alert("Information - Voulez vous vraiment supprimer la partie ? : Joueur = "+player_id);
}