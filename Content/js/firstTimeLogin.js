var dataIdList ="";
const selectedSportList = [];
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
        console.log(data);
        $.ajax({
            type: "POST",
            url: "../../Controller/homeController.php",
            data: data,
            success: function(data) {
                if (data == 1) {
                    nextPage1();
                } else {
                    console.log(data);
                    alert("YOUR DATA HAS NOT BEEN SUBMITTED FOR SOME KIND OF REASON");
                }
            }
        })
        return false;
    })
    $("#nextPage2").click(function(){
        var sportList = $(".selectedSecondStepSport");
        var selectedListStr = ""
        for (i=0;i<sportList.length;i++) {
            var temp = sportList[i].getAttribute("dataid");
            selectedSportList.push(sportList[i].innerText);
            selectedListStr =  selectedListStr + temp +"¿";
        }
        selectedListStr = selectedListStr.substring(0,selectedListStr.length-1);//delete the last ¿
        console.log(selectedListStr);
        $.ajax({
            type: "POST",
            url: "../../Controller/homeController.php",
            data: "selectedList="+selectedListStr+"&processUpdate=2",
            success: function (data) {
                nextPage2();
                $("#putItHere").html(data);
                var titleList = document.getElementsByClassName("titleTarget");
                for (i = 0;i<titleList.length;i++) {
                    titleList[i].innerHTML = selectedSportList[i];
                }
            }
        })
        console.log(selectedSportList);
    })
    $("#positionAndLevelSelector").submit(function(){
        var listOfSelection = $(".indSportSelector");
        // listOfSelection.each(function (index,item){
        var submitData = "";
        for (i = 0; i<listOfSelection.length;i++) {
            submitData = listOfSelection[i].serialize();
            console.log(submitData);
            $.ajax({
                type: "POST",
                url: "../../Controller/homeController.php",
                data: submitData,
                success: function(data) {
                    console.log(data);
                    if (data == 0) {
                        alert("nope");
                        return false;
                    }
                }
            })
            return false;
        }
        nextPage3();
        return false;
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
//TODO: relocate the nextpage functions into ajax
function nextPage1() {
    $(".signUpUI[sequence='1']").hide();
    $(".signUpUI[sequence='2']").show();
}
function nextPage2() {
    $(".signUpUI[sequence='2']").hide();
    $(".signUpUI[sequence='3']").show();
}
function nextPage3() {
    $(".signUpUI[sequence='3']").hide();
    $(".signUpUI[sequence='4']").show();
}
