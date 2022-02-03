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
    <title>All sports | SOP</title>
    <link rel="icon" href="../../Content/imgsrc/icons/pageIcon.png">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/mainpage.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/loggedInMainpage.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/all_sport.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
</head>
<body>
    <div id="maxContainer">
        <div id="mainContent">
            <h1>所有运动</h1>
            <div id="sportSelectContainer">
                <a href="#">
                    <div class="sportIcon" id="basketball">
                        <h3>篮球</h3>
                    </div>
                </a>
                <a href="#">
                    <div class="sportIcon" id="volleyball">
                        <h3>排球</h3>
                    </div>
                </a>
                <a href="#">
                    <div class="sportIcon" id="soccer">
                        <h3>足球</h3>
                    </div>
                </a>
                <a href="#">
                    <div class="sportIcon" id="badminton">
                        <h3>羽毛球</h3>
                    </div>
                </a>
                <a href="#">
                    <div class="sportIcon" id="tableTennis">
                        <h3>乒乓球</h3>
                    </div>
                </a>
                <a href="#">
                    <div class="sportIcon" id="baseball">
                        <h3>棒球</h3>
                    </div>
                </a>
                <a href="#">
                    <div class="sportIcon">
                        <h3>羽毛球</h3>
                    </div>
                </a>
                <a href="#">
                    <div class="sportIcon">
                        <h3>羽毛球</h3>
                    </div>
                </a>
            </div>

        </div>
    </div>

<script src="../../Content/js/loggedInMainpage.js"></script>
<script src="../../Content/js/mainpage.js"></script>
<script src="../../Content/js/allSport.js"></script>
</body>
</html>