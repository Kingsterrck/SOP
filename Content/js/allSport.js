$(document).ready(function(){
    $(".sportIcon").attr("onclick","linkSportInfo(id)")
})

function linkSportInfo(sportName) {
    $.ajax({
        type: "POST",
        url: "../../Controller/mainpageController.php",
        data: "sportLink="+sportName,
        success: function(data){
            if (data == 0) {
                window.location.href="gameSearch.php"
            }
        }
    })
}