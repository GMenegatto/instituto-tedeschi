var video = document.getElementById("myVideoPlayer");
function stopVideo(){
     video.pause();
     video.currentTime = 0;
}

var botao = document.getElementById("button-modal1")
var fundo = document.getElementById("modal")
botao.onclick = function() {
    var botao = document.getElementById("body");
    botao.disabled = false;
    botao.style.overflow = "hidden";
    var botao = document.getElementById("modal");
    botao.disabled = false;
    botao.style.display = "flex";


}



var botao = document.getElementById("close-modal")
botao.onclick = function() {
    stopVideo();
    var botao = document.getElementById("body");
    botao.disabled = false;
    botao.style.overflow = "scroll";
    var botao = document.getElementById("modal");
    botao.disabled = false;
    botao.style.display = "none";

}

 
fundo.onclick = function() {
    var botao = document.getElementById("body");
    botao.disabled = false;
    botao.style.overflow = "scroll";
    var botao = document.getElementById("modal");
    botao.disabled = false;
    botao.style.display = "none";

 }


fundo.onclick = function() {
    var botao = document.getElementById("body");
    botao.disabled = false;
    botao.style.overflow = "scroll";
    var botao = document.getElementById("modal2");
    botao.disabled = false;
    botao.style.display = "none";

}