<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/get_in.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/header&fsmenu.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
</head>
<body>
<div id="header">
    <div>
        <img id="menuButton" src="imgsrc/icons/menu.png" onclick="openNav()">
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
                    <img src="imgsrc/icons/searchIcon.png">
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
<div id="mainBox">
    <div class="signUpUI" data="0" id="signUpFirstStep">
        <h1>欢迎</h1>
        <form>
            <input class="loginBox" type="text" placeholder="&nbsp;邮箱">
            <input class="loginBox" type="password" placeholder="&nbsp;密码">
            <input class="loginBox" type="button" value="注册" onclick="changeUI()">
            <a href="#"><input class="loginBox" type="button" value="已经有账号？立刻登录"></a>
        </form>
    </div>
    <div class="signUpUI" data="1" id="signUpSuccess">
        <h1>注册成功！！</h1>
        <p>欢迎你加入赛事系统！</p>
        <a href="login.php"><input class="loginBox" type="button" value="立即登录"></a>
    </div>
<!--    <div class="signUpUI" data="2" id="signUpThirdStep">-->
<!---->
<!--    </div>-->
</div>
<script src="js/sign_up.js"></script>
<script src="js/header_responsiveness.js"></script>
<script>
    defaultSetup();
    function defaultSetup(){
        //set the first step to be visible
        for (i=0;i<UIList.length;i++) { // let all the UI blocks be invisible
            UIList[i].style.display="none";
        }
        signUpFirstStep.style.display="block";
    }
</script>
</body>
</html>