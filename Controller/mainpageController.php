<?php
require_once "../Model/user_info_model.php";
require_once "../Business/mainpageBusiness.php";
require_once "../Model/game_info_model.php";
require_once "../Model/user_positionModel.php";
require_once "../Model/comglomerateModel.php";
session_set_cookie_params(86400);
session_start();

if (isset($_POST["type"])&&isset($_COOKIE["email"])) {
    $temp = gettingSpaceInfo($_COOKIE["email"]);
    $dataString = printPersonalData($temp);
    echo $dataString;
}
//link from all_sport to gameSearch
if(isset($_GET["sportNameForLink"])) {
    $_SESSION["sportNameRequest"] = $_GET["sportNameForLink"];
    return 0;
}

if (isset($_POST["gameSearchInitialize"])) {
    $RENAMETHISVARIABLE = getGameInfo($_SESSION["sportNameRequest"]);
}
if (isset($_POST["logout"])) {
//    random ppl's code on stackoverflow
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time()-1000);
            setcookie($name, '', time()-1000, '/');
        }
    }
    session_destroy();
    return 0;
}

//------------------
// loggedInMainpage.php

if (isset($_POST["getUser"])) {
    $returnedUsername = getUsername();
    $returnedUsername->data_seek(0);
    $row = $returnedUsername->fetch_array();
    $tempName = $row["username"];
    setcookie(
        "username",$tempName,time()+86400, "/"
    );
    echo $tempName;
}

if (isset($_POST["getUserSport"])) {
    $positionList = selectFromUserPositionByUserIdLimited($_COOKIE["uid"]); //this is supposed to return 3 rows
    if ($positionList[0] == 2) { //it works
        $actualPositionList = extractPlayerPosition($positionList[1]); // a list
        $sportNameList = array();
        for ($i = 0; $i<count($actualPositionList); $i++) {
            $currentPosition = $actualPositionList[$i];
            $nameObject = selectFromOccuPosAndSportTypeByOccuPosId($currentPosition);
            if ($nameObject[0] == 2) { //it works
                $appendi = sportNameExtract($nameObject[1]);
                $sportNameList[] = $appendi;
            } else {
                error_log("mainpageController.php line 66 says ".$nameObject[1]);
            }
        }
        $echoString = "";
        for ($i = 0; $i < 3 ; $i++) {
            $echoString.=$sportNameList[$i]."ç";
        }
        echo $echoString;
//        $GLOBALS["sportList"] = "";
//        for ($i = 0; $i < count($actualPositionList);$i++) {
//            $tempSportName = selectFromOccuPosAndSportTypeByOccuPosId($actualPositionList[$i]);
//            if ($tempName[0] == 2) {
//                sportNameExtract($tempSportName);
//            } else {
//                error_log($tempName[1]);
//            }
//        }
//        echo $GLOBALS["sportList"];
    } else { //it doesn't work
        error_log($positionList[1]);
    }
}

//loggedInMainpage.php

//in squadSearch.php, user searches the squads using the search box
if (isset($_GET["searchForSquad"])) {

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
    $userId = $_COOKIE["email"];
    error_log("you're in 2");
    error_log($userId);
    $username = selectFromUserinfoByEmail($userId);
    return $username[1];
}

function searchSquadByName($name) {

}