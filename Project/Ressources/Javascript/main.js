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
    console.log(player,isEmpty);
    var popup = document.getElementById("popup");
    var popupTitle = document.getElementById("popupInfoTitle");
    var popupSubTitle = document.getElementById("popupInfoSubTitle");
    var popupButtonPlay= document.getElementById("playButton");
    var popupButtonDelete = document.getElementById("deleteButton");

    var titleText = "Nouvelle Partie";
    var subTitle = "";
    var current_scene = 1;
    var player_id = player.id;

    if(!isEmpty){
        titleText = player.current_scene;
        subTitle = player.current_scene;
        current_scene = player.current_scene;
    }

    popupTitle.innerHTML = titleText;
    popupSubTitle.innerHTML = subTitle;

    //TODO - REUSSIR A SUPPRIMER LES EVENTS LISTENER
    popupButtonPlay.removeEventListener("click", play);
    popupButtonDelete.removeEventListener("click", deleteGame)

    popupButtonPlay.addEventListener('click', function(){
        play(player_id,current_scene)}, false);

    popupButtonDelete.addEventListener('click', function(){
        deleteGame(player_id)}, false);
}

function play(player_id,current_scene){
    alert("Information : Joueur = "+player_id+" Scene = "+current_scene);
}

function deleteGame(player_id){
    alert("Information - Voulez vous vraiment supprimer la partie ? : Joueur = "+player_id);
}