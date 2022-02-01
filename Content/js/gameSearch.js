$(document).ready(function(){
    $.ajax({
        type:"POST",
        url: "../../Controller/MainpageController.php",
        data: "gameSearchInitialize=1",
        success: function () {

        }
    })
})
GSresponsiveness();
window.addEventListener("resize",function () {
    GSresponsiveness();
})
function GSresponsiveness() {
    var winWidth = window.innerWidth;
    if (winWidth > 1200){
        $("#gameInfo").css("width",0.61*winWidth+"px");
        $("#squadInfo").css("width",0.25*winWidth+"px");
    } else {
        $("#gameInfo").css("width",0.66*winWidth+"px");
        $("#squadInfo").css("width",0.28*winWidth+"px");
    }
}
function toggleGameDisplay(element) {
    $(".gameTab").removeClass("active");
    $(element).toggleClass("active");
    x
}
