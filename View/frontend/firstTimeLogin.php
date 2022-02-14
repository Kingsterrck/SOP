<?php
include_once "headerNLI_fsm.php";
session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/get_in.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/firstTimeLogin.css">
    <script src="../../Content/js/jQuery%201.8.js"></script>
</head>
<body>
    <div id="mainBox">
        <div class="signUpUI" sequence="1">
            <form id="firstStepForm">
                <h1>欢迎！！</h1>
                <p>请完善你的个人信息</p>
                <input hidden="hidden" name="processUpdate" type="number" value="1">
                <input name="username" type="text" class="loginBox" placeholder="用户名">
                <input name="phoneNum" type="number" class="loginBox" placeholder="手机号码">
                <div class="shortLoginBoxContainer">
                        <select class="shortLoginBox" name="gender" id="genderSelect">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Non-binary</option>
                            <option value="4">Not to tell</option>
                        </select>
                        <input name="age" type="number" class="shortLoginBox" placeholder="年龄"  min="1" max="100">
                </div>
                <div class="shortLoginBoxContainer">
                    <input name="height" type="number" class="shortLoginBox" placeholder="身高 in centimeters" min="100" max="250">
                    <input name="weight" type="number" class="shortLoginBox" placeholder="体重 in kilograms" min="20" max="300" style="float:right">
                    <input type="submit" class="loginBox nextStep">下一步</input>
                </div>
            </form>
        </div>
        <div class="signUpUI" sequence="2" style="width:500px">
                <h1>选择你感兴趣的运动</h1>
                <p>可以多选</p>
                <div id="secondSportContainer">
                </div>
                <button type="button" class="loginBox nextStep" id="nextPage2">下一步</button>
        </div>
        <div class="signUpUI" sequence="3">
            <form id="positionAndLevelSelector">
                <h1>选择你的级别和位置</h1>
                <div id="putItHere" class="shortLoginBoxContainer">


                </div>
                <input type="submit" id="stepThreeSubmitButton" value="submit">;
            </form>
        </div>
        <div class="signUpUI" sequence="4"></div>
    </div>
<script src="../../Content/js/firstTimeLogin.js"></script>
</body>
</html>