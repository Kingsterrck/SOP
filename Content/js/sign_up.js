//get client's window height and width
const window_height = window.innerHeight;
var window_width = window.innerWidth;
const UIList = document.getElementsByClassName("signUpUI");
var UICounter = 1;
var signUpFirstStep = document.getElementById("signUpFirstStep");
var signUpSecondStep = document.getElementById("signUpSuccess");

function changeUI() {
    for (i=0;i<UIList.length;i++) {
        UIList[i].style.display = "none";
        if (UIList[i].getAttribute("data")==UICounter) {
            UIList[i].style.display= "block";
            UICounter++;
        }
    }
}

$(document).ready(function(){
    $("#tempSignUp").submit(function(){
        var data = $("#tempSignUp").serialize();
        $.ajax({
            type: "POST",
            url: "../../Controller/homeController.php",
            data: data,
            success: function(data){
                var splitedMsg = data.split("¿");
                console.log(splitedMsg);
                if (splitedMsg[0] == 1) { //success
                    alert( "Data Saved: " + splitedMsg[1] );
                    changeUI();
                } else if (splitedMsg[0] == 2) { //replicated
                    alert(splitedMsg[1]);
                } else if(splitedMsg[0] == 3){
                    window.location.href="../../View/frontend/404.php"
                }


            }
        });
        return false;
    });
})
