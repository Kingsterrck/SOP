$(document).ready(function (){
    var gameId = $("#gameIdSubmission").val();
    $.ajax({
        type: "POST",
        url: "../../Controller/gameController.php",
        data: "gameInfoGameIdSubmission="+gameId,
        success: function(data) {
            console.log(data);
            var splitedData = data.split("ç");
            $("#gameTitle").html(splitedData[0]);
            $("#locationDisplay").html(splitedData[2]);
            $("#introDisplay").html(splitedData[3]);
            $("#creatorDisplay").html(splitedData[4]);
        }
    })

    idk();
    window.addEventListener("resize",function (){
        idk();
    })
    function idk() {
        var kuan = window.innerWidth;
        if (kuan <730) {
            $("#info").css("width",0.9*kuan+"px");
        } else {
            $("#info").css("width",0.3*kuan+"px");
            $("#people").css("width",0.55*kuan+"px");
        }
    }
})