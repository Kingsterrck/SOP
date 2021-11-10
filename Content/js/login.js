$(document).ready(function (){
    $("#login").submit(function(){
        var status = $("#login").serialize();
        console.log(status);
        $.ajax({
            type: "POST",
            url: "../../Controller/homeController.php",
            data: status,
            success: function(data) {
                console.log(data);
                if (data == 1) {
                    window.location.href="../../View/frontend/loggedInMainpage.php";
                } else if (data == 2) {
                    window.location.href="../../View/frontend/firstTimeLogin.php";
                } else if (data == 3) {
                    alert("No records are found, go to sign up page");
                    window.location.href="../../View/frontend/sign_up.php";
                }
            }
        })
        return false;
    })
})