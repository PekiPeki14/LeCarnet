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
    alert("Information : Joueur = "+player_id+" Scene = "+current_scene);
}

function deleteGame(player_id){
    alert("Information - Voulez vous vraiment supprimer la partie ? : Joueur = "+player_id);
}