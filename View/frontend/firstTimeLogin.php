<?php
include_once "headerNLI_fsm.php";
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
            <form>
                <h1>欢迎！！</h1>
                <p>请完善你的个人信息</p>
                <input type="text" class="loginBox" placeholder="用户名">
                <input type="number" class="loginBox" placeholder="手机号码">
                <div class="shortLoginBoxContainer">
                        <select class="shortLoginBox" name="gender" id="genderSelect">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Non-binary</option>
                            <option value="4">Not to tell</option>
                        </select>
                        <input type="number" class="shortLoginBox" placeholder="年龄"  min="1" max="100">
                </div>
                <div class="shortLoginBoxContainer">
                    <input type="number" class="shortLoginBox" placeholder="身高 in centimeters" min="100" max="250">
                    <input type="number" class="shortLoginBox" placeholder="体重 in kilograms" min="20" max="300" style="float:right">
                    <button type="button" class="loginBox nextStep" onclick="nextPage1()">下一步</button>
            </form>
        </div>·
        </div>
        <div class="signUpUI" sequence="2" style="width:500px">
            <h1>选择你感兴趣的运动</h1>
            <p>可以多选</p>
            <div id="secondSportContainer">
                <a href="#" class="secondStepSport" dataId="3">篮球</a>
                <a href="#" class="secondStepSport" dataId="1" >羽毛球</a>
                <a href="#" class="secondStepSport">橄榄球</a>
                <a href="#" class="secondStepSport">乒乓球</a>
                <a href="#" class="secondStepSport">足球</a>
                <a href="#" class="secondStepSport">网球</a>
                <a href="#" class="secondStepSport">排球</a>
                <a href="#" class="secondStepSport">曲棍球</a>
                <a href="#" class="secondStepSport">飞盘</a>
                <a href="#" class="secondStepSport">棒球</a>
                <a href="#" class="secondStepSport">高尔夫</a>
                <a href="#" class="secondStepSport">桌球</a>
            </div>
            <button type="button" class="loginBox nextStep" onclick="nextPage2()">下一步</button>

        </div>
        <div>

        </div>
    </div>
<script src="../../Content/js/firstTimeLogin.js"></script>
</body>
</html>