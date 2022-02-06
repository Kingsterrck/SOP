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
    <title>Game Information | SOP</title>
    <link rel="icon" href="../../Content/imgsrc/icons/pageIcon.png">
<!--    stylesheets-->
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/space.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/mainpage.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/gameInfo.css">
<!--    jQuery-->
    <script src="../../Content/js/jQuery%201.8.js"></script>
</head>
<body>
<div id="maxContainer">
    <div id="nameBanner">
        <h1 id="gameTitle">GAME TITLE</h1>

    </div>
    <div id="mainContent">
        <div id="info">
            <div>
                <p>体育</p>
                <h4 id="sportDisplay">VOLLEY</h4>
            </div>
            <div>
                <p>人数</p>
                <h4 id="numberOfPlayerDisplay">4/12</h4>
            </div>
            <div>
                <p>地点</p>
                <h4 id="locationDisplay">GCGS</h4>
            </div>
            <div>
                <p>简介</p>
                <h4>aba aba aba</h4>
            </div>
            <div>
                <p>创建者</p>
                <h4>Kingsterrck</h4>
            </div>
        </div>
        <div id="people">
            <h1>PLAYERS</h1>
            <div class="playerContainer">
                <img class="profile-pic" alt="profile pic" src="../../Content/imgsrc/kingsterrck-bili.webp">
                <div>
                    <h3>Kingsterrck</h3>
                    <h5>500 RP</h5>
                </div>
            </div>
            <div class="playerContainer">
                <img class="profile-pic" alt="profile pic" src="../../Content/imgsrc/kingsterrck-bili.webp">
                <div>
                    <h3>Kingsterrck</h3>
                    <h5>500 RP</h5>
                </div>
            </div>
            <div class="playerContainer">
                <img class="profile-pic" alt="profile pic" src="../../Content/imgsrc/kingsterrck-bili.webp">
                <div>
                    <h3>Kingsterrck</h3>
                    <h5>500 RP</h5>
                </div>
            </div>
            <div class="playerContainer">
                <img class="profile-pic" alt="profile pic" src="../../Content/imgsrc/kingsterrck-bili.webp">
                <div>
                    <h3>Kingsterrck</h3>
                    <h5>500 RP</h5>
                </div>
            </div>
            <div class="playerContainer">
                <img class="profile-pic" alt="profile pic" src="../../Content/imgsrc/kingsterrck-bili.webp">
                <div>
                    <h3>Kingsterrck</h3>
                    <h5>500 RP</h5>
                </div>
            </div>
            <div class="playerContainer">
                <img class="profile-pic" alt="profile pic" src="../../Content/imgsrc/kingsterrck-bili.webp">
                <div>
                    <h3>Kingsterrck</h3>
                    <h5>500 RP</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../Content/js/mainpage.js"></script>
<script src="../../Content/js/gameInfo.js"></script>
</body>

