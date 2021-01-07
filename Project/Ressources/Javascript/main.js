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

function showPopup(playerId,isEmpty){
    console.log(playerId,isEmpty);
}