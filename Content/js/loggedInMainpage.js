$(document).ready(function(){
    //get the username
    $.ajax({
        type: "POST",
        url: "../../Controller/mainpageController.php",
        data: "getUser=1",
        success: function(data){
            $("#usernameDisplay").html("What's up, "+data);
            getUserSport();
          }
    })
    function getUserSport() {
        $.ajax({
            type: "POST",
            url: "../../Controller/mainpageController.php",
            data: "getUserSport=1",
            success: function(data) {
                console.log(data);
                var sportList = data.split("ç");
            }
        })
    }
})