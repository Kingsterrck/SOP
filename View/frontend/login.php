<?php
include_once "headerNLI_fsm.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in | SOP</title>
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/login.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/get_in.css">
</head>
<body>
    <div class="signUpUI">
        <h1>欢迎回来</h1>
        <form>
            <input class="loginBox" type="text" placeholder="邮箱">
            <input class="loginBox" type="password" placeholder="密码">
            <div><a href="#">忘记密码</a></div>
            <a href="#"><input class="loginBox" type="submit" placeholder="登录"></a>
        </form>
        <input class="loginBox" type="button" placeholder="没有账号？立刻注册">
    </div>
</body>
</html>