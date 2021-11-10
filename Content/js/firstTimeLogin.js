$(document).ready(function(){
    $(".signUpUI").hide();
    $(".signUpUI[sequence='1']").show();
    $(".secondStepSport").click(function (){
        $(this).toggleClass("selectedSecondStepSport");
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
