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
                <div id="gameInfoInsertDestination">

                </div>
                <?php
                if (isset($_GET["sport"])) {
                    $temp = $_GET["sport"];
                    error_log($temp);
                    echo"<input id='sportNameSubmit' value='$temp' hidden='hidden'>";
                }
                ?>
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

