$(document).ready(function () {
    $("#logoutButton").click(function (){
        $.ajax({
            type: "POST",
            url: "../../Controller/mainpageController.php",
            data: "logout=aba",
            success: function (data) {
                window.location.href="../../View/frontend/index.php";
            }
        })
    })
})
