<?php
require_once "../Model/game_info_model.php";
require_once "../Model/sport_type_model.php";
require_once "../Business/gameBusi.php";
require_once "../Model/gameTypeModel.php";
require_once "../Model/user_game_model.php";
session_start();

if (isset($_POST["createGameInitialize"])) {
    $sportList = sportListRetrivial()[1];
    echo createGamePrintSportOption($sportList);
}
//creating a new game w/ createGame.php
if (isset($_POST["title"])&&isset($_POST["gameType"])&&isset($_POST["gameTime"])&&isset($_POST["rp"])&&isset($_POST["location"])&&isset($_POST["description"])) {
    $insertStatus = newGameCreation($_POST["title"],$_POST["gameType"],$_POST["gameTime"],$_POST["rp"],$_POST["location"],$_POST["description"],$_SESSION["username"]);
    if ($insertStatus[0] == 1) {
        echo 0;//error
    } else {
        echo 1;//success
    }
}

if(isset($_POST["createGameGameTypeRequest"])) {
    $something = gameTypeRetrivial($_POST["createGameGameTypeRequest"]);
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
    $sportList = sportListRetrivial()[1];
    echo createGamePrintSportOption($sportList);
}

if (isset($_POST["gameSearchSportNameSubmission"])) {
    return gameSearchStepOne($_POST["gameSearchSportNameSubmission"]);
}

//get info about a game in gameinfo.php
if (isset($_POST["gameInfoGameIdSubmission"])) {
    $infoList = gameInfoStepOne($_POST["gameInfoGameIdSubmission"]);
    $temp = gameInfoExtract($infoList[1]);
    echo $temp;
}

//on createGame.php, insert the userid and the id of the game just created into user_game
if (isset($_POST["createGameInsertIntoUserGame"])) {
    error_log("session username: ".$_SESSION["username"]);
    $createdGameIdList = getGameIdByCreatorAndDate($_SESSION["username"]);
    if ($createdGameIdList[0] == 2) {
        $createdGameIdList[1]->data_seek(0);
        $row = $createdGameIdList[1]->fetch_array();
        $createdGameId = $row["id"];
        $_SESSION["linkGameId"] = $createdGameId;
        $ifInsert = InsertIntoUserGame($_SESSION["uid"], $createdGameId);
        if ($ifInsert[0] == 2) {
            echo "1Ç".$_SESSION["linkGameId"];
        } else {
            error_log("abaaba ".$ifInsert[1]);
        }
    } else {
        error_log($createdGameIdList[1]);
    }
}

if (isset($_POST["gameInfoGetSportAndType"])&&isset($_SESSION["gameInfoGameTypeId"])) {
    error_log("APEX LEGENDS SEASON 12");
    echo gameInfoStepTwo($_SESSION["gameInfoGameTypeId"]);
}


function sportListRetrivial() {
    return selectAllSports();
}

function newGameCreation($title, $sport, $gameTime, $rp, $location, $description, $creator) {
    $createGaMe = insertNewGame($title, $sport, $gameTime, $rp, $location, $description, $creator);
    error_log($createGaMe[0]);
    return $createGaMe;
}

function gameTypeRetrivial($sportTypeId) {
    return selectBySportTypeId($sportTypeId);
}

function gameSearchStepOne($sport_name) {
    $gameList = getGameInfoBySport($sport_name);
    if ($gameList[0] == 2) {
        $temp = gameSearchPrintGame($gameList[1]);
        echo $temp;
    } else {
        echo $gameList[0];
    }
}
function gameInfoStepOne($id) {
    return getGameInfoByGameId($id);
}

function gameInfoStepTwo($id) {
    $sportInfo = selectBySportTypeId($id);
    if ($sportInfo[0] == 2) {
        error_log($sportInfo[1]);
        $sportInfo[1]->data_seek(0);
        $row = $sportInfo[1]->fetch_array();
        $maxPlayer = $row["max_player"];
        $gameTypeName = $row["type_name"];
        $sportTypeId = $row["sport_type_id"];
        $result = $maxPlayer . "Ç" . $gameTypeName . "Ç";
        error_log($sportTypeId);
        $sportNameArray = selectBySportId($sportTypeId);
        if ($sportNameArray[0] == 2) {
            $target = $sportNameArray[1];
            $target->data_seek(0);
            $row = $target->fetch_array();
            $sportName = $row["type_name"];
            $result.= $sportName;
            return $result;
        } else {
            error_log($sportNameArray[1]);
        }
    } else {
        error_log($sportInfo[1]);
    }
}