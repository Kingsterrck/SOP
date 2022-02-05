<?php
session_start();
if (isset($_SESSION["email"])) {
    include_once "header_fsm_dropdown.php";
} else {
    include_once "headerNLI_fsm.php";
}
include_once "footer.php";
//$sport = $_GET['sportName'];
//echo "<input type='text' hidden='hidden' value='$sport' id='sportName'>";
//?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/space.css">
        <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/mainpage.css">
        <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/loggedInMainpage.css">
        <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/gameSearch.css">
<!--        jQuery-->
        <script src="../../Content/js/jQuery%201.8.js"></script>
    </head>
    <body>
    <div id="maxContainer">
        <div id="nameBanner">
            <h1 id="sportNameDisplay">SPORTNAME</h1>
            <a href="createGame.php">
                <div id="createGameButtonHolyShit"><b>创建比赛</b></div>
            </a>
        </div>
        <div id="mainContent">
            <div id="gameInfo">
                <div id="gameSelectorContainer">
                    <a href="#"><h1 class="gameTab active" onclick="toggleGameDisplay(this)" dataId="0">今日比赛</h1></a>
                    <a href="#"><h1 class="gameTab" onclick="toggleGameDisplay(this)" dataId="1">未来比赛</h1></a>
                    <a href="#"><h1 class="gameTab" onclick="toggleGameDisplay(this)" dataId="2">过往比赛</h1></a>
                </div>
                <div class="gameInfoDisplay">
                    <h5 class="gameInfoDisplayTitle">title</h5>
                    <svg class="gameInfoDisplayElement" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                        <g id="Group_17" data-name="Group 17" transform="translate(0 -2)">
                            <g id="time" transform="translate(0 5)">
                                <path id="Path_1" data-name="Path 1" d="M9,7h1.629v4.072H14.7V12.7H9Z" transform="translate(-3.454 -3.039)" fill="#fff"/>
                                <path id="Path_2" data-name="Path 2" d="M18,10a8,8,0,1,1-8-8A8,8,0,0,1,18,10Zm-1.6,0A6.4,6.4,0,1,1,10,3.6,6.4,6.4,0,0,1,16.4,10Z" transform="translate(-2 -2)" fill="#fff" fill-rule="evenodd"/>
                            </g>
                        </g>
                    </svg>
                    <h5 class="gameInfoDisplayElement">time</h5>
                    <svg class="gameInfoDisplayElement" xmlns="http://www.w3.org/2000/svg" width="13.257" height="16" viewBox="0 0 13.257 16">
                        <path id="Path_85" data-name="Path 85" d="M14.171,9.222a2.95,2.95,0,1,1-2.95-2.95A2.949,2.949,0,0,1,14.171,9.222Zm-1.475,0a1.475,1.475,0,1,1-1.475-1.475A1.475,1.475,0,0,1,12.7,9.222Z" transform="translate(-4.393 -2.392)" fill="#fff" fill-rule="evenodd"/>
                        <path id="Path_86" data-name="Path 86" d="M5.058,12.429a6.629,6.629,0,1,1,9.371-.23L9.859,17Zm8.3-1.246L9.808,14.917,6.074,11.363a5.156,5.156,0,1,1,7.289-.179Z" transform="translate(-3 -1)" fill="#fff" fill-rule="evenodd"/>
                    </svg>
                    <h5 class="gameInfoDisplayElement">location</h5>
                </div>
            </div>
            <div id="squadInfo">
                <h1>战队</h1>
                <div id="squadInfoContainer">
                    <a href="#">
                        <div class="indSquad">
                            <h3>1</h3>
                            <p>SQUAD NAME</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="indSquad">
                            <h3>1</h3>
                            <p>SQUAD NAME</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="indSquad">
                            <h3>1</h3>
                            <p>SQUAD NAME</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="indSquad">
                            <h3>1</h3>
                            <p>SQUAD NAME</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="../../Content/js/space.js"></script>
    <script src="../../Content/js/gameSearch.js"></script>
    <script src="../../Content/js/mainpage.js"></script>
    </body>
</html>

