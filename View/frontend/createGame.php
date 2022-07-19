<?php
session_start();

if (isset($_COOKIE["email"])) {
    include_once "header_fsm_dropdown.php";
} else {
    echo "<script>alert('Sign up or log in to create and join games');window.location.href='sign_up.php'</script>";
}
include_once "footer.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Create a game | SOP</title>
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/mainpage.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/createGame.css">
</head>
<body>
<!--FUCK I DON'T WANNA WRITE ANY CODE!-->
<div id="maxContainer">
    <div id="mainContent">
        <h1>Create a game</h1>
        <form id="gameCreacion">
            <div class="row">
                <input required class="gameInfoInput" type="text" name="title" placeholder="title">
                <select required class="gameInfoInput" name="sport" id="sportSelectOption">
                    <option>SPORT</option>
                </select>
                <select required class="gameInfoInput" name="gameType" id="gameTypeSelector">
                    <option></option>
                </select>
            </div>
            <div class="row">
                <input required class="gameInfoInput" name="gameTime" type="datetime-local" id="timeInput">
                <select required class="gameInfoInput" name="rp">
                    <option value="0">0RP - 初学</option>
                    <option value="200">200RP - 初级</option>
                    <option value="400">400RP - 业余</option>
                    <option value="600">600RP - 中级</option>
                    <option value="800">800RP - 职业</option>
                    <option value="1000">1000RP - APEX PREDATOR</option>
                </select>
            </div>
            <div class="row">
                <input required class="gameInfoInput" name="location" type="text" placeholder="地点">
                <input required class="gameInfoInput" name="description" type="text" placeholder="描述">
            </div>
            <a href="#">
                <button type="submit"><span>创建</span></button>
            </a>
<!--            TODO:ADD A CONFIRM INTERFACE OF CREATING A GAME -->
        </form>
    </div>

</div>
<script src="../../Content/js/mainpage.js"></script>
<script src="../../Content/js/createGame.js"></script>
</body>
</html>