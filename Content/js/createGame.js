$(document).ready(function(){
    $.ajax({
        type: "POST",
        data: "createGameInitialize=1",
        url: "../../Controller/gameController.php",
        success: function (data) {
            $("#sportSelectOption").html(data);
        }
    })
    $("#sportSelectOption").change(function(){
        var sportIden = document.getElementById("sportSelectOption").value;
        console.log(sportIden);
        $.ajax({
            type: "POST",
            data: "createGameGameTypeRequest=" + sportIden,
            url: "../../Controller/gameController.php",
            success: function (data) {
                console.log(data);
                $("#gameTypeSelector").css("display","block");
                $("#gameTypeSelector").html(data);
            }
        })
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
                    $.ajax({
                        type: "POST",
                        data: "createGameInsertIntoUserGame=true",
                        url: "../../Controller/gameController.php",
                        success: function (data) {
                            console.log(data);
                            if (data[0] == 1) {
                                var targetId = data.substring(2);
                                alert("game successfully created, congrats");
                                window.location.href="../../View/frontend/gameInfo.php?id="+targetId;
                            } else {
                                alert("nope");
                            }
                        }
                    })
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