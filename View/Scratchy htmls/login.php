<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/get_in.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/header&fsmenu.css">
</head>
<body>
<div id="header">
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
            <li class="headItems"><a href="#" style="color: gold">登录</a></li>
            <li class="headItems"><a href="sign_up.php">注册</a></li>
            <li>
                <div id="headerSearchBox">
                    <img src="imgsrc/searchIcon.png">
                    <input type="text" placeholder="搜索">
                </div>
            </li>
        </ul>
    </div>
</div>
<div id="loginUI" class="signUpUI">
    <h1>欢迎回来</h1>
    <input class="loginBox" type="text" placeholder="邮箱">
    <input class="loginBox" type="password" placeholder="密码">
    <a href="#">忘记密码</a>
    <input class="loginBox" type="button" value="登录" onclick="javascript:void(0)">
</div>
<script src="js/sign_up.js"></script>
<script src="js/header_responsiveness.js"></script>
</body>
</html>