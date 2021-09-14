<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainpage</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/header&fsmenu.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
</head>
<body>
<div id="header">
    <div>
        <img id="menuButton" src="imgsrc/menu.png" onclick="openNav()">
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
            <li class="headItems"><a href="#" style="color: gold">注册</a></li>
            <li>
                <div id="headerSearchBox">
                    <img src="imgsrc/searchIcon.png">
                    <input type="text" placeholder="搜索">
                </div>
            </li>
        </ul>
    </div>
</div>
<script src="js/header_responsiveness.js"></script>
</body>
</html>