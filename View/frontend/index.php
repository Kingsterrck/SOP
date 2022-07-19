<?php
include_once "headerNLI_fsm.php";
include_once "footer.php";
if (isset($_COOKIE["email"])) {
    header("location: loggedInMainpage.php");
}
?>
<!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
    <title>Sport Organizing Platform</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI";
        }
        #maxBox {
            width:100%;
            background: #F2994A;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #F2C94C, #F2994A);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #F2C94C, #F2994A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        #container h1 {
            color: white;
            font-size: 70px;
        }
        p{
            color: white;
            font-size: 20px;
        }
        a {
            text-decoration: underline;
            color: white;
        }
        #container {
            width: 450px;
            border-radius: 10px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        #buttonList {
            overflow: hidden;
            zoom: 1;
            padding: 15px 0;
        }
        #buttonList div {
            float: left;
        }
        .button {
            background-color: gold;
            border-radius: 10px;
            -webkit-box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
            width: 208px;
            line-height: 50px;
            margin-right: 15px;
            transition: .3s;
        }
        .button:hover {
            box-shadow:0 8px 16px 0 rgba(0,0,0,0.2);
        }
    </style>
    <script src="../../Content/js/jQuery%201.8.js"></script><!-- qjuery link-->
    </head>
    <body>
    <div id="maxBox">
        <div id="container">
            <h1>Play sports, <br>like never before</h1>
            <p>Search for games and join, browse sports and tournaments</p>
            <div id="buttonList">
                <a href="sign_up.php">
                    <div class="button" id="signUp">
                        <h3>Sign up</h3>
                    </div>
                </a>
                <a href="login.php">
                    <div class="button" id="login">
                        <h3>log in</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script>
        var ith = window.innerHeight;
        changeHeight();
        window.addEventListener("resize",function(){
            changeHeight();
        })
        function changeHeight(){
            ith = window.innerHeight;
            var box = document.getElementById("maxBox");
            box.style.height = ith + "px";
            box.style.width = "100%";
        }
    </script>
    </body>