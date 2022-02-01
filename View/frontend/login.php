<?php
include_once "headerNLI_fsm.php";
include_once "footer.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in | SOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/login.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/get_in.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
</head>
<body>
    <div class="signUpUI">
        <h1>欢迎回来</h1>
        <form id="login" action="../../Controller/homeController.php" method="post">
            <input class="loginBox" type="text" name="email" placeholder="邮箱">
            <input class="loginBox" type="password" name="uPassword" placeholder="密码">
            <input type="text" name="type" value="login" hidden="hidden">
            <div><a href="#">忘记密码</a></div>
            <a href="#"><input class="loginBox" type="submit" value="登录"></a>
        </form>
        <a href="sign_up.php" class="loginBox">没有账号？立刻注册</a>
    </div>
<script src="../../Content/js/login.js"></script>
</body>
</html>