<?php
require_once "../Model/user_info_model.php";
require_once "../Business/mainpageBusiness.php";
session_set_cookie_params(86400);
session_start();

if (isset($_POST["type"])&&isset($_SESSION["email"])) {
    error_log("get info");
    $temp = gettingSpaceInfo($_SESSION["email"]);
    $dataString = printPersonalData($temp);
    echo $dataString;
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