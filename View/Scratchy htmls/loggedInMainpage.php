<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mainpage</title>
        <link rel="icon" href="imgsrc/icons/pageIcon.png">
        <link rel="stylesheet" type="text/css" href="stylesheets/headerExtended.css">
        <link rel="stylesheet" type="text/css" href="stylesheets/mainpage.css">
        <link rel="stylesheet" type="text/css" href="stylesheets/loggedInMainpage.css">
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
    </head>
    <body>
        <div id="headerExtended">
            <div id="minimizedContainer">
                <a href="#"><img id="menuButton" src="imgsrc/icons/menu.png" onclick="openNav()"></a>
                <a href="#"><img onclick="toggleDropdown()" id="minimizedLittleMan" src="imgsrc/icons/little%20man%20white.png"></a>
                <a href="#"><img onclick="toggleDropdown()" id="minimizedLittleMan2" src="imgsrc/icons/little%20man%20gold.png"></a>
                <h1>赛事系统</h1>
            </div>
            <div id="headerContentContainer">
                <div id="headLeft">
                    <ul>
                        <li class="headItems" id="headLeftItem1"><a href="#">运动</a></li>
                        <li class="headItems"><a href="#">战队</a></li>
                        <li class="headItems"><a href="#">比赛</a></li>
                        <li class="headItems"><a href="#">直播</a></li>
                        <li class="headItems"><a href="#">论坛</a></li>
                        <li class="headItems"><a href="#">场馆</a></li>
                    </ul>
                </div>
                <div id="headMid">
                    <h1>赛事系统</h1>
                </div>
                <div id="headRight">
                    <ul>
                        <li>
                            <div id="headerSearchBox">
                                <img src="imgsrc/icons/searchIcon.png">
                                <input type="text" placeholder="搜索">
                            </div>
                        </li>
                        <li id="littleManContainer">
                            <a href="#"><img onclick="toggleDropdown()" id="minimizedLittleMan3" src="imgsrc/icons/little%20man%20white.png"></a>
                            <a href="#"><img onclick="toggleDropdown()" id="minimizedLittleMan4" src="imgsrc/icons/little%20man%20gold.png"></a>
                        </li>
                    </ul>
                </div>
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
                <a href="#">论坛</a>
                <a href="#">场馆</a>
            </div>

        </div>
        <div id="dropdown">
            <ul>
                <li><a href="#">我的账号</a></li>
                <li><a href="#">测试评分</a></li>
                <li><a href="#">我的比赛</a></li>
                <li><a href="#">我的战队</a></li>
                <li><a href="#">我的二手闲置</a></li>
                <li><a href="#">登出</a></li>
            </ul>
        </div>
        <div id="maxContainer">
            <div id="mainContent">
                <div id="personalSelect">
                    <h1>Hi, Kingsterrck</h1>
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
                                <img src="imgsrc/icons/clock.png">
                                <p>13:00 - 6.19</p>
                                <img src="imgsrc/icons/computer-screen.png">
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
    <script src="js/mainpage.js"></script>
    <script src="js/loggedInMainpage.js"></script>
    <script src="js/headerExtendedResponsive.js"></script>
    </body>
</html>