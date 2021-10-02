var window_height = window.innerHeight;
var window_width = window.innerWidth;
var maxContainerHeight = window_height - 74 + "px";
var mainContentWidth = window_width * 0.8 + "px";
// var sportSelectWidth = window_width * 0.26 + "px";
//jquery
$(document).ready(function (){
    //$("#maxContainer").css("height",maxContainerHeight);
    $("#mainContent").css("width",mainContentWidth);
    //$(".sportSelect").css("width",sportSelectWidth);
})
function openNav() {
    var overlay = document.getElementById("fullscreenMenu");
    console.log(overlay);
    overlay.style.height = "100%";
}

function closeNav() {
    var overlay = document.getElementById("fullscreenMenu");
    overlay.style.height = "0%";
}
mainpageResponsiveness();
window.addEventListener("resize",function(){
    mainpageResponsiveness();
})
function mainpageResponsiveness() {
    var window_height = window.innerHeight;
    var window_width1 = window.innerWidth;
    $(document).ready(function(){
        $("#maxContainer").css("width","100%");
        // if (document.getElementById("maxContainer").style.height<window_height){
        //     $("#maxContainer").css("height","5000px");
        // }
        if (window_width1 > 1200) {
            var mainContentWidth = window_width1 * 0.9 + "px";
            $("#mainContent").css("width",mainContentWidth);
        } else {
            $("#mainContent").css("width", 0.95* window_width1 + "px");
        }
        if (window_width1 > 1335) {
            $(".sportIcon").css("width", 0.28 * window_width1 + "px");
        } else {
            $(".sportIcon").css("width", 0.43*window_width1 + "px");
        }
        $(".extendedMenuIcon").css("width", 0.21*window_width1 + "px");
    })
}