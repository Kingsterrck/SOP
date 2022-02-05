$(document).ready(function(){
    $.ajax({
        type: "POST",
        data: "createGameInitialize=1",
        url: "../../Controller/gameController.php",
        success: function (data) {
            $("#sportSelectOption").html(data);
        }
    })
    $("#gameCreacion").submit(function () {
        var targetDate = document.getElementById("timeInput").value;
        document.getElementById("timeInput").type="text";
        document.getElementById("timeInput").value = transter(targetDate);
        console.log(transter(targetDate));
        var data = $("#gameCreacion").serialize();
        console.log(data);
        $.ajax({
            type: "POST",
            data: data,
            url: "../../Controller/gameController.php",
            success: function(data) {
                if (data == 1) {
                    alert("game successfully created, congrats");
                } else {
                    alert("nooooo it doesnt work");
                }
            }
        })
        return false;
    })
    responsiveness();
    window.addEventListener("resize",function(){
        responsiveness();
    })
    function responsiveness() {
        var height = window.innerHeight;
        $("#maxContainer").css("height",height+"px");
    }
    function transter(value) {
        var date = value.substring(0,10);
        var hour = value.substring(11,13);
        var minute = value.substring(14);
        var output = date + " " + hour + ":" + minute + ":00";
        return output;
    }
})