$(document).ready(function () {
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
    $("#squadCreatingForm").submit(function(){
        var data = $("#squadCreatingForm").serialize();
        console.log(data);
        $.ajax({
            type: "POST",
            data: data,
            url: "../../Controller/gameController.php",
            success: function(data) {
                console.log(data);
                if (data == 1) {
                    alert("Your squad is successfully created");
                    window.location.href="../../View/frontend/squad.php";
                } else {
                    alert("nope");
                }
            }
        })
        return false;
    })

    res();
    window.addEventListener("resize", function(){
        res();
    })
    function res() {
        var zibeng = window.innerWidth;
        $(".squadInput").css("width", 0.4*zibeng + "px");
    }
})