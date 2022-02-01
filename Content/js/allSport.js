$(document).ready(function(){
    $(".sportIcon").attr("onclick","linkSportInfo(id)")
})

function linkSportInfo(sportName) {
    $.ajax({
        url: "../../Controller/mainpageController.php",
        data: "sportNameForLink="+sportName,
        success: function(data){
            if (data == 0) {
                window.location.href="gameSearch.php"
            }
        }
    })
}