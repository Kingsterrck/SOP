window.onresize=function(){
    responsiveness();
}
function responsiveness() {
    var window_width = window.innerWidth;
    if (window_width > 1340) { //if the window is wide enough to display all the elements
        headLeft.style.marginLeft= 0.06 * window_width + "px";
        headRight.style.marginRight=0.06 * window_width + "px";
        headMid.style.marginLeft=0.08 * window_width + "px";
        headMid.style.marginRight=0.08*window_width + "px";

        headRight.style.display="block";
        headLeft.style.display="block";
        menuIcon.style.display="none";

    } else if (window_width < 1340) {
        headRight.style.display="none";
        headLeft.style.display="none";
        menuIcon.style.display="block";
        menuIcon.style.display="block";
        headMid.style.marginLeft=0.4 * window_width + "px";
        headMid.style.marginRight=0.4* window_width + "px";
    }


}