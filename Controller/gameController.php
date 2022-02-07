<?php
require_once "../Model/game_info_model.php";
require_once "../Model/sport_type_model.php";
require_once "../Business/gameBusi.php";
require_once "../Model/gameTypeModel.php";
session_start();

if (isset($_POST["createGameInitialize"])) {
    error_log("get sport");
    $sportList = sportListRetrivial()[1];
    echo createGamePrintSportOption($sportList);
}
//creating a new game w/ createGame.php
if (isset($_POST["title"])&&isset($_POST["gameType"])&&isset($_POST["gameTime"])&&isset($_POST["rp"])&&isset($_POST["location"])&&isset($_POST["description"])) {
    $insertStatus = newGameCreation($_POST["title"],$_POST["gameType"],$_POST["gameTime"],$_POST["rp"],$_POST["location"],$_POST["description"]);
    if ($insertStatus[0] == 1) {
        echo 0;//error
    } else {
        echo 1;//success
    }
}

if(isset($_POST["createGameGameTypeRequest"])) {
    $something = gameTypeRetrivial($_POST["createGameGameTypeRequest"]);
    error_log($something[0]);
    if ($something[0] == 2) {
        $temp =  createGamePrintGameTypeOption($something[1]);
        error_log($temp);
        echo $temp;
    } else {
        echo $something[1];
    }
}
//on squadSearch.php, get the list of sports
if (isset($_POST["squadSearchGetSport"])) {
    error_log("GET THE FUCKING SPORT!!");
    $sportList = sportListRetrivial()[1];
    echo createGamePrintSportOption($sportList);
}


function sportListRetrivial() {
    return selectAllSports();
}

function newGameCreation($title, $sport, $gameTime, $rp, $location, $description) {
    error_log("wasup2");
    $createGaMe = insertNewGame($title, $sport, $gameTime, $rp, $location, $description);
    error_log($createGaMe[0]);
    return $createGaMe;
}

function gameTypeRetrivial($sportTypeId) {
    return selectBySportTypeId($sportTypeId);
}
function gameSearchStepOne($sport_name) {
    $gameList = getGameInfoBySport($sport_name);
    return $gameList;
}