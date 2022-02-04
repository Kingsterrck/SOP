<?php
session_start();
if (isset($_SESSION["email"])) {
    include_once "header_fsm_dropdown.php";
} else {
    include_once "headerNLI_fsm.php";
}
include_once "footer.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"INSERT SQUAD NAME" | SOP</title>
    <link rel="icon" href="../../Content/imgsrc/icons/pageIcon.png">
<!--    stylesheets-->
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/space.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/mainpage.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/squad.css">
<!--    jQuery-->
    <script src="../../Content/js/jQuery%201.8.js"></script>
</head>
<body>
<div id="maxContainer">
    <div id="nameBanner">
        <h1 id="">NAMENAMENAME</h1>
    </div>
    <div id="mainContent">
        <div id="squadInfoDisplay">
            <div class="squadInfoDisplayContainer">
                <h1>6</h1>
                <p>人数</p>
            </div>
            <div class="squadInfoDisplayContainer">
                <h1></h1>
                <p>胜</p>
            </div>
            <div class="squadInfoDisplayContainer">
                <h1></h1>
                <p>负</p>
            </div>
            <div class="squadInfoDisplayContainer">
                <h1></h1>
                <p>总</p>
            </div>
            <div class="squadInfoDisplayContainer">
                <h1></h1>
                <p>胜率</p>
            </div>
        </div>
        <div id="players">
            <h1>队员</h1>
            <div class="playerDisplay">
                <h4>NAME</h4>
                <div class="playerInfoDisplay">
                    <div class="playerInfoDisplayContainer">
                        <p>性别</p>
                        <h6>男</h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>年龄</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>身高</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>体重</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>位置</p>
                        <h6></h6>
                    </div>
                </div>
            </div>
            <div class="playerDisplay">
                <h4>NAME</h4>
                <div class="playerInfoDisplay">
                    <div class="playerInfoDisplayContainer">
                        <p>性别</p>
                        <h6>男</h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>年龄</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>身高</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>体重</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>位置</p>
                        <h6></h6>
                    </div>
                </div>
            </div>
            <div class="playerDisplay">
                <h4>NAME</h4>
                <div class="playerInfoDisplay">
                    <div class="playerInfoDisplayContainer">
                        <p>性别</p>
                        <h6>男</h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>年龄</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>身高</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>体重</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>位置</p>
                        <h6></h6>
                    </div>
                </div>
            </div>
            <div class="playerDisplay">
                <h4>NAME</h4>
                <div class="playerInfoDisplay">
                    <div class="playerInfoDisplayContainer">
                        <p>性别</p>
                        <h6>男</h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>年龄</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>身高</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>体重</p>
                        <h6></h6>
                    </div>
                    <div class="playerInfoDisplayContainer">
                        <p>位置</p>
                        <h6></h6>
                    </div>
                </div>
            </div>
        </div>
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
    </div>
</div>
<script src="../../Content/js/space.js"></script>
<script src="../../Content/js/mainpage.js"></script>
<script src="../../Content/js/squad.js"></script>
</body>
</html>
