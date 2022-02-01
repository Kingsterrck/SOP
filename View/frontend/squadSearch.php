<?php
session_start();
if (isset($_SESSION["email"])) {
    include_once "header_fsm_dropdown.php";
} else {
    include_once "headerNLI_fsm.php";
}
include_once "footer.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for squads | SOP</title>
<!--    stylesheets-->
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/squadSearch.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/space.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/mainpage.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/loggedInMainpage.css">
    <!--    jQuery-->
    <script src="../../Content/js/jQuery%201.8.js"></script>
</head>
<body>
<div id="maxContainer">
    <div id="nameBanner">

    </div>
    <div id="mainContent">
        <div id="squadFormContainer">
            <form id="squadSearchBox">
                <div id="headerSearchBox">
                    <img src="../../Content/imgsrc/icons/searchIcon.png">
                    <input type="text" name="searchForSquad" placeholder="搜索">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../../Content/js/squadSearch.js"></script>
<script src="../../Content/js/mainpage.js"></script>
</body>
</html>