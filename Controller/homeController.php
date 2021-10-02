<?php
include_once "../Model/classicsModel.php";
require_once "../Model/temp_user_model.php";
require_once "../Business/HomeBusi.php";

if (isset($_POST["author"])&&isset($_POST["title"])&&isset($_POST["category"])&&isset($_POST["year"])&&isset($_POST["isbn"])) {
    return insertIntoClassics($_POST["author"],$_POST["title"],$_POST["category"],$_POST["year"],$_POST["isbn"]);
}
if (isset($_POST["email"])&&isset($_POST["uPassword"])) {
    $duplicatedUser = checkTempUser($_POST["email"]);
    if ($duplicatedUser) {
        $temp = insertIntoTempUser($_POST["email"],$_POST["uPassword"]);
        echo "1¿$temp";
    } else {
        echo "2¿this email has been registered, go to login page";
    }
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
function checkTempUser($email) {
    $checkStatus = tempUserSelect($email);
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