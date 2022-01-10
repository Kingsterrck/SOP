$(document).ready(function(){
    $.ajax({
        type:"POST",
        url: "../../Controller/MainpageController.php",
        data: "gameSearchInit=1",
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
        $("#gameInfo").css("width",0.63*winWidth+"px");
        $("#squadInfo").css("width",0.27*winWidth+"px");
    } else {
        $("#gameInfo").css("width",0.665*winWidth+"px");
        $("#squadInfo").css("width",0.285*winWidth+"px");
    }
}
