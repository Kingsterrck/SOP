<?php
session_start();
if (isset($_SESSION["email"])) {
    include_once "header_fsm_dropdown.php";
} else {
    include_once "headerNLI_fsm.php";
}
?>
<!DOCTYPE html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
        <title>Feature unavailable | SOP</title>
        <style>
            #main {
                background-color: #232323;
                padding-top:130px;
            }
            #main h1 {

                color: gold;
            }
            * {
                text-align: center;
            }
            a, p {
                color: white;
                text-decoration: none;
            }
            #returnButton {
                width: 200px;
                border-radius: 10px;
                background-color: gold;
                color: black;
                line-height: 50px;
                margin: 20px auto;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div id="main">
            <h1>This feature is still under development</h1>
            <p>future availability can be checked with <a href="https://github.com/Kingsterrck/SOP">GitHub page</a></p>
            <?php
            if (isset($_SESSION["email"])) {
                echo "<a href='loggedInMainpage.php'><div id='returnButton'>Return to mainpage</div></a>";
            } else {
                echo "<a href='sign_up.php'><div id='returnButton'>Sign up</div></a>";
            }
            ?>


        </div>
    <script>
        NAresponsiveness();
        window.addEventListener("resize",function () {
            NAresponsiveness();
        })
        function NAresponsiveness() {
            var width = window.innerWidth;
            var height = window.innerHeight;
            $("#main").css("width",width + "px");
            $("#main").css("height",height+"px");
        }
    </script>
    </body>
</html>