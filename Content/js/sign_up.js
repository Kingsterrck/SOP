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
                if (data == 1) {
                    alert("Account successfully created");
                    changeUI();
                } else if (data == 2) {
                    alert("This email has been registered, go to login page or change an email");
                    window.location.href="../../View/frontend/login.php";
                } else {
                    alert("database or network error, wait for a while and retry");
                }

                // var splitedMsg = data.split("¿");
                // console.log(splitedMsg);
                // if (splitedMsg[0] == 1) { //success
                //     alert( "Data Saved: " + splitedMsg[1] );
                //     changeUI();
                // } else if (splitedMsg[0] == 2) { //replicated
                //     alert(splitedMsg[1]);
                // } else if(splitedMsg[0] == 3){
                //     window.location.href="../../View/frontend/404.php"
                // }


            }
        });
        return false;
    });
})
