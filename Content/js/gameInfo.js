$(document).ready(function (){

    idk();
    window.addEventListener("resize",function (){
        idk();
    })
    function idk() {
        var kuan = window.innerWidth;
        if (kuan <730) {
            $("#info").css("width",0.9*kuan+"px");
        } else {
            $("#info").css("width",0.3*kuan+"px");
            $("#people").css("width",0.55*kuan+"px");
        }
    }
})