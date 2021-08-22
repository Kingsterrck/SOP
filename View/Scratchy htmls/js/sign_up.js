//get client's window height and width
const window_height = window.innerHeight;
const window_width = window.innerWidth;
var UIList = document.getElementsByClassName("SignUpUI");

defaultSetup()
function defaultSetup(){
    //document.getElementById("mainBox").style.height = window_height - 70 + "px"
    document.getElementById("signUpFirstStep").style.width = 0.18 * window_width + "px";
    const signUpFirstWidth = document.getElementById("signUpFirstStep").style.width;
    let signUpBoxList = document.getElementsByClassName("loginBox");
    for (i=0;i<signUpBoxList.length;i++) {
        signUpBoxList[i].style.width=signUpFirstWidth;   // set the width of things in the login box
    }
    document.getElementById("signUpFirstStep").style.width = 0.23 * window_width + "px";
    for (i=0;i<UIList.length;i++) {
        UIList[i].style.display="none";
    }
    document.getElementById("SignUpFirstStep").style.display="block";
}

function changeToSecond() {
    for (i=0;i<UIList.length;i++) {
        UIList[i].style.display = "none";
    }
    document.getElementById("signUpSecondStep").style.display="block";
}