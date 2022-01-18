<?php
include_once "../Model/classicsModel.php";
require_once "../Model/temp_user_model.php";
require_once "../Model/user_info_model.php";
require_once "../Business/HomeBusi.php";
require_once "../Model/sport_type_model.php";
require_once "../Model/occupationPositionModel.php";

session_start();
session_set_cookie_params(86400);
if (isset($_POST["author"])&&isset($_POST["title"])&&isset($_POST["category"])&&isset($_POST["year"])&&isset($_POST["isbn"])) {
    return insertIntoClassics($_POST["author"],$_POST["title"],$_POST["category"],$_POST["year"],$_POST["isbn"]);
}
if(isset($_POST["sportType"])){
    echo getSportType();
}
//log in entrance
if (isset($_POST["email"])&&isset($_POST["uPassword"])&&isset($_POST["type"])){
    error_log("post email");
    $temp = checkLoginInfo($_POST["email"],$_POST["uPassword"]);
    if ($temp == 1) {
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["uPassword"];
        echo 1;
    } else if ($temp == 2) {
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["uPassword"];
        echo 2;
    } else if ($temp == 3) {
        echo 3;
    }
}

//sign up entrance
if (isset($_POST["email"])&&isset($_POST["uPassword"])&&!isset($_POST["type"])) {
    $duplicatedUser = checkTempUser($_POST["email"]);
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["uPassword"];
    if ($duplicatedUser) {
        $temp = insertIntoTempUser($_POST["email"],$_POST["uPassword"]);

        echo "1¿$temp";
    } else {
        echo "2¿this email has been registered, go to login page";
    }
}

if (isset($_SESSION["email"])&&isset($_SESSION["password"])&&isset($_POST["username"])&&isset($_POST["phoneNum"])&&isset($_POST["gender"])&&isset($_POST["age"])&&isset($_POST["height"])&&isset($_POST["weight"])) {
    error_log("submitted");
    $temp = submitUserInfo($_SESSION["email"],$_SESSION["password"],$_POST["username"], $_POST["phoneNum"],$_POST["gender"], $_POST["age"],$_POST["height"],$_POST["weight"]);
    if ($temp == 1) {
        echo 1;
    } else {
        echo 2;
    }
}
if (isset($_POST["selectedList"])) {
    $listOfPos = getPositionName($_POST["selectedList"]);
    echo $listOfPos;
}


function insertIntoClassics($author, $title, $category, $year, $isbn) {
    $insertStatus = classicsInsert($author, $title, $category, $year, $isbn);
    if ($insertStatus[0] == 2) {
        return $insertStatus[1];
    } else {
        echo $insertStatus[1];
    }
}

function getData(){
    $resultString = "";
    $data = classicsSelect();
    if ($data[0]==1){ //error
        echo $data[1];
    }else{
        $result = $data[1];
        $ClassicStr = getClassicStr($result);
        return $ClassicStr;
    }
}

function insertIntoTempUser($email, $uPassword) {
    date_default_timezone_set('PRC');
    $createTime = date("Y-m-d H:i:s");
    $updateTime = date("Y-m-d H:i:s");
    $state = 1;
    $insertStatus = tempUserInsert($email, $uPassword, $createTime, $updateTime, $state);
    if ($insertStatus[0] == 2) {
        return $insertStatus[1];
    } else {
        return $insertStatus[1];
    }
}

function checkTempUser($email, $password="¡") {
    $checkStatus = tempUserSelect($email, $password);
    if ($checkStatus[0] == 2) {
        if ($checkStatus[1]->num_rows >= 1) {
           return false;
           // header("location:".$location);
        } else {
            return true;
        }
    } else {
        echo "3¿System error";
    }
}

function checkLoginInfo($email,$uPassword) {
    $checkStatus = selectUserByUsernameAndPassword($email, $uPassword);
    if ($checkStatus[0] == 2) {
        if ($checkStatus[1]->num_rows >= 1) {
            //在userinfo里面有
            return 1;
        } else {
            //没有
            $checkTUStatus = checkTempUser($email, $uPassword);
            if ($checkTUStatus === false) { //is in tempuser
                return 2;
            } else { //is not in tempuser
                return 3;
            }
        }
    } else {
        return $checkStatus[1];
    }
}

function submitUserInfo($email, $uPassword, $username, $phoneNum, $gender, $age, $height, $weight) {
    date_default_timezone_set('PRC');
    $createdTime = date("Y-m-d H:i:s");
    $updatedTime = date("Y-m-d H:i:s");
    //TODO select from userinfo if the user is duplicated
    $checkStatus = insertIntoUserInfo($email, $uPassword, $username, $phoneNum, $gender, $age, $height, $weight, $createdTime, $updatedTime);
    if ($checkStatus[0] == 2) {
        error_log($checkStatus[1]);
        if ($checkStatus[1] >= 1) { //successfully inserted
            return 1;
        }
    } else {
        return 2;
    }
}

function getSportType() {
    $result = "";
    $names = sportTypeSelect();
    if ($result[0] == 1) {
        echo $result[1];
    } else {
        $result = $names[1];
        $sportNameStr = gettingSportType($result);
        return $sportNameStr;

    }
}

function getPositionName($str) {
    $data = [];
    $splitedStr = explode("¿",$str);
    $listOfPosition="";
    for ($i=0;$i<sizeof($splitedStr);$i++) {
        $temp = selectOccupationPositionBySportId($splitedStr[$i]);
        if ($temp[0]==1){
            return $temp[1];
        }else{
            $processedTemp = fuseOccuPos($temp[1]);
            $listOfPosition .= $processedTemp . "¡";
        }
    }
    return $listOfPosition;
}