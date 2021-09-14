//get client's window height and width
const window_height = window.innerHeight;
var window_width = window.innerWidth;
const UIList = document.getElementsByClassName("signUpUI");
var UICounter = 1;
var signUpFirstStep = document.getElementById("signUpFirstStep");
var signUpSecondStep = document.getElementById("signUpSuccess");
var headLeft = document.getElementById("headLeft");
var headMid = document.getElementById("headmid");
var headRight = document.getElementById("headright");
var menuIcon = document.getElementById("menuButton");


function centerTitle(){ //edit the margin of the title
    var window_width = window.innerWidth;
    var leftWidth = document.getElementById("headLeft").clientWidth+document.getElementById("headLeft").clientWidth;
    console.log(leftWidth);
    var rightWidth = document.getElementById("headright").style.width+document.getElementById("headright").style.marginRight;
    //console.log("right: " + rightWidth);
    var availableMargin = window_width - leftWidth - rightWidth;
    //console.log("sub: " + availableMargin);
    var difference = leftWidth - rightWidth; // THIS IS NOT WORKING BECAUSE YOU CANNOT SUBSTRACT STRINGS
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
function openNav() {
    var overlay = document.getElementById("fullscreenMenu");
    console.log(overlay);
    overlay.style.height = "100%";
}

function closeNav() {
    var overlay = document.getElementById("fullscreenMenu");
    overlay.style.height = "0%";
}