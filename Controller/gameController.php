<?php
require_once "../Model/game_info_model.php";
require_once "../Model/sport_type_model.php";
require_once "../Business/gameBusi.php";
require_once "../Model/gameTypeModel.php";
require_once "../Model/user_game_model.php";
require_once "../Model/squadModel.php";
require_once "../Model/user_positionModel.php";
require_once "../Model/comglomerateModel.php";
session_start();

//on squadSearch.php, get the list of sports
if (isset($_POST["squadSearchGetSport"])) {
    $sportList = sportListRetrivial()[1];
    echo createGamePrintSportOption($sportList);
}

if (isset($_POST["gameSearchSportNameSubmission"])) {
    return gameSearchStepOne($_POST["gameSearchSportNameSubmission"]);
}

// ----------
// gameInfo.php

//get basic info, like title, location, and creator
if (isset($_POST["gameInfoGameIdSubmission"])) {
    $gameId = $_POST["gameInfoGameIdSubmission"];
    setcookie(
        "gameInfoId",$gameId,time()+86400,"/"
    );
    $infoList = gameInfoStepOne($gameId);
    $temp = gameInfoExtract($infoList[1]);
    echo $temp;
}

//get information about sport, i.e. sport name, game name, maximum player
if (isset($_POST["gameInfoGetSportAndType"])&&isset($_COOKIE["gameTypeId"])) {

    echo gameInfoStepTwo($_COOKIE["gameTypeId"]);
}

//get information about players
/*
how this is going to work:
1. get all the players in a game by gameInfoId
2. for each of the players, search for all of their enrolled positions
3. for each of the positions, check if its sportTypeId matches the the sportTypeId of the game
*/
if (isset($_POST["gameInfoGetParticipatedUser"])) {
    $playerList = getPlayerInfoByGameInfoId($_COOKIE["gameInfoId"]);
    $playerArray = playerListAppend($playerList);
    foreach ($playerArray as $userId) {
        $userPositionList = selectFromUserPositionByUserId($userId);
        if ($userPositionList[0] == 2) {
            aUsersPositionAppend($userPositionList[1]);
            for ($i = 0;$i<count($GLOBALS["playerPositionArray"]);$i++) {
                //each element in playerPositionArray corresponds to one in levelArray
                $tempPosition = $GLOBALS["playerPositionArray"];
                $occuPosList = selectFromOccupationPositionByPositionName($tempPosition);

            }
        } else {
            error_log($userPositionList[1]);
        }
    }
}

//gameInfo.php
//----------------
// createGame.php

// get the list of available sports
if (isset($_POST["createGameInitialize"])) {
    $sportList = sportListRetrivial()[1];
    echo createGamePrintSportOption($sportList);
}

//get game type based on sport type
if(isset($_POST["createGameGameTypeRequest"])) {
    $something = gameTypeRetrivial($_POST["createGameGameTypeRequest"]);
    if ($something[0] == 2) {
        $temp =  createGamePrintGameTypeOption($something[1]);
        echo $temp;
    } else {
        echo $something[1];
    }
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
//creating a new game w/ createGame.php
if (isset($_POST["title"])&&isset($_POST["gameType"])&&isset($_POST["gameTime"])&&isset($_POST["rp"])&&isset($_POST["location"])&&isset($_POST["description"])) {
    $insertStatus = newGameCreation($_POST["title"],$_POST["gameType"],$_POST["gameTime"],$_POST["rp"],$_POST["location"],$_POST["description"],$_SESSION["username"]);
    if ($insertStatus[0] == 1) {
        echo 0;//error
    } else {
        echo 1;//success
    }
}

// createGame.php
//------------------
// createSquad.php

//creating a squad with createSquad.php
if (isset($_POST["squadCreation"])&&isset($_POST["title"])&&isset($_POST["gameType"])&&isset($_POST["description"])) {
    echo creatingNewSquad($_SESSION["username"], $_POST["title"], $_POST["gameType"], $_POST["description"]);
}


// createSquad.php
//------------------
// functions


function sportListRetrivial() {
    return selectAllSports();
}

function newGameCreation($title, $sport, $gameTime, $rp, $location, $description, $creator) {
    $createGaMe = insertNewGame($title, $sport, $gameTime, $rp, $location, $description, $creator);
    if ($createGaMe[0] == 1) {
        error_log("Creating a new game is failed, the server message is: ".$createGaMe[0]);
    } else {
        return $createGaMe;
    }
}

function gameTypeRetrivial($sportTypeId) {
    return selectFromGameTypeByGameTypeId($sportTypeId);
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
    $sportInfo = selectFromGameTypeById($id);
    if ($sportInfo[0] == 2) {
        $holder = $sportInfo[1];
        $result = extractGameInfo($holder);
        $sportNameArray = selectBySportId($GLOBALS["sportTypeId"]);
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

function creatingNewSquad($creator, $title, $game_type_id, $description) {
    $createTime = date("Y-m-d H:i:s");
    $updateTime = date("Y-m-d H:i:s");
    $insertStatus = createNewSquad($creator, $title, $game_type_id,$description, $createTime, $updateTime);
    if ($insertStatus[0] == 2) {
        return 1;
    } else {
        error_log($insertStatus[1]);
    }
}

function getPlayerInfoByGameInfoId($gameInfoId) {
    $userList = selectFromUserGameByGameInfoId($gameInfoId);
    if ($userList[0] == 2) {
        return $userList[1];
    } else {
        error_log($userList[1]);
    }
}
