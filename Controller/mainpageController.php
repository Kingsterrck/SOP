<?php
require_once "../Model/user_info_model.php";
require_once "../Business/mainpageBusiness.php";
require_once "../Model/game_info_model.php";
session_set_cookie_params(86400);
session_start();

if (isset($_POST["type"])&&isset($_SESSION["email"])) {
    $temp = gettingSpaceInfo($_SESSION["email"]);
    $dataString = printPersonalData($temp);
    echo $dataString;
}
if(isset($_POST["sportLink"])) {
    $_SESSION["sportNameReq"] = $_POST["sportLink"];
    return 0;
}
if (isset($_POST["gameSearchInit"])) {
    $RENAMETHISVARIABLE = getGameInfo($_SESSION["sportNameReq"]);
}
if (isset($_POST["logout"])) {
    session_destroy();
    return 0;
}
if (isset($_POST["getUser"])) {
    $returnedUsername = getUsername();
    error_log("fuck php");
    $returnedUsername->data_seek(0);
    $row = $returnedUsername->fetch_array();
    $tempName = $row["username"];
    echo $tempName;
}

function gettingSpaceInfo($email) {
    $stringChain = spaceGetInfo($email);
    if ($stringChain[0] == 2) {
        return $stringChain[1];
    } else {
        error_log($stringChain[1]);
        return $stringChain[1];
    }
}

function getGameInfo($sportName) {
    $temp = getGameInfoBySport($sportName);
}

function getUsername() {
    $userId = $_SESSION["email"];
    error_log("you're in 2");
    error_log($userId);
    $username = getTheUserName($userId);
    return $username[1];
}