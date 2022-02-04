$(document).ready(function(){


    r();
    window.addEventListener("resize",function(){
        r();
    })
    function r() {
        var wid = window.innerWidth;
        if (true) {
            $(".squadInfoDisplayContainer").css("width",0.15*wid+"px");
        }
    }
    function toggleGameDisplay(element) {
        $(".gameTab").removeClass("active");
        $(element).toggleClass("active");
    }
})