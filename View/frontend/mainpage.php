<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainpage</title>
    <link rel="icon" href="../../Content/imgsrc/icons/pageIcon.png">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/header&fsmenu.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/mainpage.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
</head>
<body>
<div id="header">
    <div>
        <img id="menuButton" src="../../Content/imgsrc/icons/menu.png" onclick="openNav()">
    </div>
    <div id="headLeft">
        <ul>
            <li class="headItems" id="headLeftItem1"><a href="#">运动</a></li>
            <li class="headItems"><a href="#">战队</a></li>
            <li class="headItems"><a href="#">比赛</a></li>
            <li class="headItems"><a href="#">直播</a></li>
            <li class="headItems"><a href="#">ENG</a></li>
        </ul>
    </div>
    <div id="headmid">
        <h1><a>赛事系统</a></h1>
    </div>
    <div id="headright">
        <ul>
            <li class="headItems"><a href="login.php">登录</a></li>
            <li class="headItems"><a href="#">注册</a></li>
            <li>
                <div id="headerSearchBox">
                    <img src="../../Content/imgsrc/icons/searchIcon.png">
                    <input type="text" placeholder="搜索">
                </div>
            </li>
        </ul>
    </div>
</div>
<div id="fullscreenMenu">
    <a href="#" id="closeButton" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div id="menuContent">
        <a href="#">运动</a>
        <a href="#">战队</a>
        <a href="#">比赛</a>
        <a href="#">直播</a>
    </div>

</div>
<div id="maxContainer">
    <div id="mainContent">
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
            <div class="extendedMenuIcon">
                <h2 class="extendedMenuIconLeft">运动</h2>
                <h2 class="extendedMenuIconRight">></h2>
            </div>
            <div class="extendedMenuIcon">
                <h2 class="extendedMenuIconLeft">战队</h2>
                <h2 class="extendedMenuIconRight">></h2>
            </div>
            <div class="extendedMenuIcon">
                <h2 class="extendedMenuIconLeft">比赛</h2>
                <h2 class="extendedMenuIconRight">></h2>
            </div>
            <div class="extendedMenuIcon">
                <h2 class="extendedMenuIconLeft">直播</h2>
                <h2 class="extendedMenuIconRight">></h2>
            </div>
        </div>
        <div id="footer">
            <p>© 2021 Kingster</p>
            <a href="#">Switch to English</a>
        </div>
    </div>
</div>

<script src="../../Content/js/header_responsiveness.js"></script>
<script src="../../Content/js/mainpage.js"></script>
</body>
</html>