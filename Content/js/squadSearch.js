$(document).ready(function(){
    $("#squadSearchBox").submit(function () {
        var squadTarget = $("#squadSearchBox").serialize();
        $.ajax({
            type: POST,
            url: "../../Controller/mainpageController.php",
            data: squadTarget,
            success: function (data) {

            }
        })
    })
    iCantThinkOfAnotherNameForResponsivenessFunctions();
    window.addEventListener("resize",function(){
        iCantThinkOfAnotherNameForResponsivenessFunctions();
    })
    function iCantThinkOfAnotherNameForResponsivenessFunctions() {
        var widdd = window.innerWidth;
        if (true) { //leaves space for further dev
            $(".column-1").css("width",0.2*widdd+"px");
            $(".column-2").css("width",0.2*widdd+"px");
            $(".column-3").css("width",0.15*widdd+"px");
            $(".column-4").css("width",0.06*widdd+"px");
            $(".column-5").css("width",0.06*widdd+"px");
            $(".column-6").css("width",0.1*widdd+"px");
            $(".column-7").css("width",0.1*widdd+"px");
        }
    }
})