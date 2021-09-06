//get client's window height and width
const window_height = window.innerHeight;
const window_width = window.innerWidth;
const UIList = document.getElementsByClassName("signUpUI");
var UICounter = 1;
var signUpFirstStep = document.getElementById("signUpFirstStep");
var signUpSecondStep = document.getElementById("signUpSuccess");

defaultSetup()
function defaultSetup(){
    //document.getElementById("mainBox").style.height = window_height - 70 + "px"
    signUpFirstStep.style.width = 0.18 * window_width + "px";
    signUpSecondStep.style.width = 0.23 * window_width + "px";
    const signUpFirstWidth = signUpFirstStep.style.width;
    let signUpBoxList = document.getElementsByClassName("loginBox");
    let shortSignUpBoxList = document.getElementsByClassName("shortLoginBox");
    for (i=0;i<signUpBoxList.length;i++) {
        signUpBoxList[i].style.width=signUpFirstWidth;   // set the width of things in the login box
    }
    for (i=0;i<shortSignUpBoxList.length;i++) {
        shortSignUpBoxList[i].style.width = 0.09 * window_width + "px";
    }
    signUpFirstStep.style.width = 0.23 * window_width + "px";
    for (i=0;i<UIList.length;i++) { // let all the UI blocks be invisible
        UIList[i].style.display="none";
    }
    signUpFirstStep.style.display="block";
}

function changeUI() {
    for (i=0;i<UIList.length;i++) {
        UIList[i].style.display = "none";
        if (UIList[i].getAttribute("data")==UICounter) {
            UIList[i].style.display= "block";
            UICounter++;
        }
    }
}

function changeToSecond() {
    for (i=0;i<UIList.length;i++) {
        UIList[i].style.display = "none";
    }
    document.getElementById("signUpSuccess").style.display="block";
}