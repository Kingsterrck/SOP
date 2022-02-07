$(document).ready(function(){
    $(".sportIcon").click(function () {
        var temp = $(this).attr("id");
        window.location.href="gameSearch.php?sport="+temp;
    })
})

function linkSportInfo(element) {

    // $.ajax({
    //     url: "../../Controller/mainpageController.php",
    //     data: "sportNameForLink="+sportName,
    //     success: function(data){
    //         if (data == 0) {
    //             window.location.href="gameSearch.php"
    //         }
    //     }
    // })
}