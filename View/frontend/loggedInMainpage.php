<?php
include_once "header_fsm_dropdown.php";
session_start();
session_set_cookie_params(86400);
//if (!isset($_SESSION[""])){
//    header("Location: index.php");
//}
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mainpage | SOP</title>
        <link rel="icon" href="../../Content/imgsrc/icons/pageIcon.png">
        <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/mainpage.css">
        <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/loggedInMainpage.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
    </head>
    <body>
            <div id="maxContainer">
            <div id="mainContent">
                <div id="personalSelect">
                    <h1 id="usernameDisplay">Hi</h1>
                    <div id="personalSelectIconContainer">
                        <a href="#">
                            <div id="takeATest" class="sportIcon">
                                <h3>测试评分</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div id="myGames" class="sportIcon">
                                <h3>我的比赛</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="sportIcon">
                                <h3>我的战队</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="sportSelect">
                    <div id="sportLabelContainer">
                        <h1>运动</h1>
                        <div id="allSportsLinkContainer">
                            <a href="#">所有运动></a>
                        </div>
                    </div>
                    <div id="sportSelectContainer">
                        <a href="#">
                            <div class="sportIcon">
                                <h3>SPORTNAME1</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="sportIcon" data="2">
                                <h3>SPORTNAME2</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="sportIcon">
                                <h3>SPORTNAME3</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="newestGames">
                    <div id="gameLabelContainer">
                        <h1>最新比赛</h1>
                        <div id="allGamesLinkContainer">
                            <a href="#">所有比赛></a>
                        </div>
                    </div>
                    <div id="gameSelectContainer">
                        <div class="gameSelect">
                            <div class="gameSelectTop">
                                <h4>篮球</h4>
                                <p>></p>
                            </div>
                            <p class="gameTeams">TEAM1 vs TEAM2</p>
                            <div class="gameSelectBottom">
                                <img src="../../Content/imgsrc/icons/clock.png">
                                <p>13:00 - 6.19</p>
                                <img src="../../Content/imgsrc/icons/computer-screen.png">
                                <p>Stream</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="extendedMenu">
                    <a href="all_sport.php">
                        <div class="extendedMenuIcon">
                            <h2 class="extendedMenuIconLeft">运动</h2>
                            <h2 class="extendedMenuIconRight">></h2>
                        </div>
                    </a>
                    <a href="#">
                        <div class="extendedMenuIcon">
                            <h2 class="extendedMenuIconLeft">战队</h2>
                            <h2 class="extendedMenuIconRight">></h2>
                        </div>
                    </a>
                    <a href="#">
                        <div class="extendedMenuIcon">
                            <h2 class="extendedMenuIconLeft">比赛</h2>
                            <h2 class="extendedMenuIconRight">></h2>
                        </div>
                    </a>
                    <a href="#">
                        <div class="extendedMenuIcon">
                            <h2 class="extendedMenuIconLeft">直播</h2>
                            <h2 class="extendedMenuIconRight">></h2>
                        </div>
                    </a>

                </div>
                <div id="footer">
                    <p>© 2021 Kingster</p>
                    <a href="#">Switch to English</a>
                </div>
            </div>
        </div>
    <script src="../../Content/js/mainpage.js"></script>
    <script src="../../Content/js/loggedInMainpage.js"></script>
    </body>
</html>