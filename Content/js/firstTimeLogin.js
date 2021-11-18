var dataIdList ="";
$(document).ready(function(){
    $(".signUpUI").hide();
    $(".signUpUI[sequence='1']").show();
    $.ajax( {
        type: "POST",
        url: "../../Controller/homeController.php",
        data: "sportType=666",
        success:function(data){
            $("#secondSportContainer").html(data);
            $(".secondStepSport").click(function (){
                $(this).toggleClass("selectedSecondStepSport");
            });
        }
    })
    $("#firstStepForm").submit(function () {
        var data = $("#firstStepForm").serialize();
        $.ajax({
            type: "POST",
            url: "../../Controller/homeController.php",
            data: data,
            success: function(data) {
                if (data == 1) {
                    nextPage1();
                } else {
                    alert("YOUR DATA HAS NOT BEEN SUBMITTED FOR SOME KIND OF REASON");
                }
            }
        })
    })

})
var buttonList = document.getElementsByTagName("button");
for (i=0;i<buttonList.length;i++) {
    buttonList[i].setAttribute("type","button");
}
function changeGenderIdentifier(element) {
    var a = element.innerHTML;
    var target = document.getElementById("genderIdentify");
    target.innerHTML=a;
}
function nextPage1() {
    $(".signUpUI[sequence='1']").hide();
    $(".signUpUI[sequence='2']").show();
}
function nextPage2() {
    $(".signUpUI[sequence='2']").hide();
    $(".signUpUI[sequence='3']").show();


}
