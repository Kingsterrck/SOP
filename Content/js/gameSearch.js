var sportId;
$(document).ready(function(){
    sportId = $("#sportNameSubmit").val();
    console.log(sportId);
    $.ajax({
        type: "POST",
        url: "../../Controller/gameController.php",
        data: "gameSearchSportNameSubmission="+sportId,
        success: function (data) {
            console.log(data);
            $("#gameInfoInsertDestination").html(data);
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
    function toggleGameDisplay(element) {
        $(".gameTab").removeClass("active");
        $(element).toggleClass("active");
        var dataDes = element.attr(dataId);
        console.log(dataDes);
        if (dataDes == 0) {

        } else if (dataDes == 1) {

        } else if (dataDes == 2) {

        }
    }
}

