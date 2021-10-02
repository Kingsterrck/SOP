<?php
include_once "headerNLI_fsm.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/get_in.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
    <script>

    </script>
</head>
<body>
<div id="mainBox">
    <div class="signUpUI" data="0" id="signUpFirstStep">
        <h1>欢迎</h1>
        <form id="tempSignUp">
            <input name="email" class="loginBox" type="text" placeholder="&nbsp;邮箱">
            <input name="uPassword" class="loginBox" type="password" placeholder="&nbsp;密码">
            <input class="loginBox" type="submit" value="注册" id="signUpButton">
            <a href="#"><input class="loginBox" type="button" value="已经有账号？立刻登录"></a>
        </form>
    </div>
    <div class="signUpUI" data="1" id="signUpSuccess">
        <h1>注册成功！！</h1>
        <p>欢迎你加入赛事系统！</p>
        <p>In order to verify, an email will be sent to you within 24 hours. Reply with anything within 7 days, otherwise your data will be deleted.</p>
        <a href="login.php"><input class="loginBox" type="button" value="立即登录"></a>
    </div>
<!--    <div class="signUpUI" data="2" id="signUpThirdStep">-->
<!---->
<!--    </div>-->
</div>
<script src="../../Content/js/sign_up.js"></script>
<!--<script src="js/header_responsiveness.js"></script>-->
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