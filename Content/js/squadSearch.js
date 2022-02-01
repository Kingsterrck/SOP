$(document).ready(function(){
    $("#squadSearchBox").submit(function () {
        var squadTarget = $("#squadSearchBox").serialize();
        $.ajax({
            type: POST,
            url: "../../Controller/mainpageController.php",
            data: squadTarget,
            success: function (data) {

            }
        })
    })
})