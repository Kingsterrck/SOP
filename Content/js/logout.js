$(document).ready(function () {
    $("#logoutButton").click(function (){
        console.log("啊吧啊吧");
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
