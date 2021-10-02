<!DOCTYPE html>
    <head>
    <link rel="icon" href="../../Content/imgsrc/icons/pageIcon.png">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/headerExtended.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
    </head>
<body>
<div id="headerExtended">
    <div id="minimizedContainer">
        <a href="#"><img id="menuButton" src="../../Content/imgsrc/icons/menu.png" onclick="openNav()"></a>
        <a href="#"><img onclick="toggleDropdown()" id="minimizedLittleMan" src="../../Content/imgsrc/icons/little%20man%20white.png"></a>
        <a href="#"><img onclick="toggleDropdown()" id="minimizedLittleMan2" src="../../Content/imgsrc/icons/little%20man%20gold.png"></a>
        <h1>赛事系统</h1>
    </div>
    <div id="headerContentContainer">
        <div id="headLeft">
            <ul>
                <li class="headItems" id="headLeftItem1"><a href="all_sport.php">运动</a></li>
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
                        <img src="../../Content/imgsrc/icons/searchIcon.png">
                        <input type="text" placeholder="搜索">
                    </div>
                </li>
                <li id="littleManContainer">
                    <a href="#"><img onclick="toggleDropdown()" id="minimizedLittleMan3" src="../../Content/imgsrc/icons/little%20man%20white.png"></a>
                    <a href="#"><img onclick="toggleDropdown()" id="minimizedLittleMan4" src="../../Content/imgsrc/icons/little%20man%20gold.png"></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="fullscreenMenu">
    <a href="#" id="closeButton" onclick="closeNav()">&times;</a>
    <!-- Overlay content -->
    <div id="menuContent">
        <a href="all_sport.php">运动</a>
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
<script src="../../Content/js/headerExtendedResponsive.js"></script>
</body>
</html>