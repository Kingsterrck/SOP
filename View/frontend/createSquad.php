<?php
session_start();
if (isset($_SESSION["email"])) {
    include_once "header_fsm_dropdown.php";
} else {
    echo "<script>alert('sign up or log in to create a squad');window.location.href='sign_up.php'</script>";
}
include_once "footer.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a squad | SOP</title>
    <link rel="icon" href="../../Content/imgsrc/icons/pageIcon.png">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/createSquad.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/mainpage.css">
</head>
<body>
<div id="maxContainer">
    <div id="mainContent">
        <h1>Create a squad</h1>
        <form id="squadCreatingForm">
            <input name="squadCreation" value="true" hidden>
            <input class="squadInput" name="title" required type="text" placeholder="Title">
            <select class="squadInput" required id="sportSelectOption" placeholder="sport"></select>
            <select class="squadInput" required name="gameType" id="gameTypeSelector">
                <option></option>
            </select>
            <input class="squadInput" name="description" type="text" placeholder="Description">
            <div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../../Content/js/mainpage.js"></script>
<script src="../../Content/js/createSquad.js"></script>
</body>