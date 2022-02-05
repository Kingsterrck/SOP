<?php
require_once "../Model/game_info_model.php";
require_once "../Model/sport_type_model.php";
require_once "../Business/gameBusi.php";
session_start();

if (isset($_POST["createGameInitialize"])) {
    error_log("get sport");
    $sportList = sportListRetrivial()[1];
    echo createGamePrintSportOption($sportList);
}
if (isset($_POST["title"])&&isset($_POST["sport"])&&isset($_POST["gameTime"])&&isset($_POST["rp"])&&isset($_POST["location"])&&isset($_POST["description"])) {
    error_log("wasupwasup");
    $insertStatus = newGameCreation($_POST["title"],$_POST["sport"],$_POST["gameTime"],$_POST["rp"],$_POST["location"],$_POST["description"]);
    if ($insertStatus[0] == 1) {
        return 0;//error
    } else {
        return 1;//success
    }
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