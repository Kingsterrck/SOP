<?php
require_once "../Model/user_info_model.php";
require_once "../Business/mainpageBusiness.php";
require_once "../Model/game_info_model.php";
session_set_cookie_params(86400);
session_start();

if (isset($_POST["type"])&&isset($_SESSION["email"])) {
    error_log("get info");
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