headerResponsive();
window.addEventListener("resize",function(){
    headerResponsive();
})
var dropdownStatus = false;
function headerResponsive(){
    $(document).ready(function(){
        var window_width2 = window.innerWidth;
        if (window_width2 < 1190) {
            $("#headerContentContainer").hide();
            $("#minimizedContainer").show();
        } else {
            $("#headerContentContainer").show();
            $("#minimizedContainer").hide();
            var dropdowngap = (window_width2 - 1190)/2;
            $("#dropdown").css("right",dropdowngap + "px");
        }
    })
}
function toggleDropdown() {
    $("#dropdown").toggle();
    if (dropdownStatus === false) {
        $("#minimizedLittleMan").hide();
        $("#minimizedLittleMan3").hide();
        $("#minimizedLittleMan2").show();
        $("#minimizedLittleMan4").show();
        dropdownStatus = true;
    } else {
        $("#minimizedLittleMan").show();
        $("#minimizedLittleMan3").show();
        $("#minimizedLittleMan2").hide();
        $("#minimizedLittleMan4").hide();
        dropdownStatus = false;
    }
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