//declaring
var headLeft = document.getElementById("headLeft");
var headMid = document.getElementById("headmid");
var headRight = document.getElementById("headright");
var menuIcon = document.getElementById("menuButton");
responsiveness();
window.addEventListener("resize",function(){
    responsiveness();
})
function responsiveness() {
    var window_width = window.innerWidth;
    if (window_width > 1340) { //if the window is wide enough to display all the elements
        //headLeft.style.marginLeft= 0.06 * window_width + "px";
        // headRight.style.marginRight=0.06 * window_width + "px";
        // headMid.style.marginLeft=0.08 * window_width + "px";
        // headMid.style.marginRight=0.08*window_width + "px";
        $(document).ready(function(){
            $("#headLeft").css("margin-left",0.06*window_width + "px");
            $("#headright").css("margin-right",0.06*window_width + "px");
            $("#headmid").css("margin-left",0.08*window_width+"px");
            $("#headmid").css("margin-right",0.08*window_width+"px");
            $("#headLeft").show();
            $("#headRight").show();
            $("#menuButton").hide();
        })

        // headRight.style.display="block";
        // headLeft.style.display="block";
        // menuIcon.style.display="none";

    } else if (window_width < 1340) {
        $(document).ready(function(){
            $("#headLeft").hide();
            $("#headright").hide();
            $("#menuButton").show();
            $("#headmid").css("margin-left",0.4 * window_width + "px");
            $("#headmid").css("margin-right",0.4 * window_width + "px");
        })
        // headRight.style.display="none";
        // headLeft.style.display="none";
        // menuIcon.style.display="block";
        // menuIcon.style.display="block";
        // headMid.style.marginLeft=0.4 * window_width + "px";
        // headMid.style.marginRight=0.4* window_width + "px";
    }


}