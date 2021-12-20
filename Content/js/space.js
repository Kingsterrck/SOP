responsiveness();
document.addEventListener("resize",function () {
    responsiveness();
})
function responsiveness() {
    var window_height = window.innerHeight;
    var window_width1 = window.innerWidth;
    $(document).ready(function () {
        $("#maxContainer").css("width","100%");
        if (window_width1 > 1200) {
            var mainContentWidth = window_width1 * 0.9 + "px";
            console.log(mainContentWidth);
            $("#mainContent").css("width",mainContentWidth);
        } else {
            var mainContentWidth = window_width1 * 0.95 + "px";
            $("#mainContent").css("width", mainContentWidth);
        }
        $(".personalDataDisplay").css("width",0.24*0.9*window_width1+"px");
    })
}

$(document).ready(function(){
    $.ajax({
        type: "POST",
        url: "../../Controller/mainpageController.php",
        data: "type=request",
        success: function(data){
            var splitedData = data.split("¡");
            var temp;
            console.log(temp);
            $("#topName").html(splitedData[0]);
            if (splitedData[1] == 1) {
                temp = "male";
            } else if (splitedData[1] == 2) {
                temp = "female";
            }
            $("#genderDisplay").html(temp);
            $("#ageDisplay").html(splitedData[2]);
            $("#heightDisplay").html(splitedData[3]+"cm");
            $("#weightDisplay").html(splitedData[4]+"kg");
        }
    })
})