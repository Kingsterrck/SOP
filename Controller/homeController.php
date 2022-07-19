<?php
include_once "../Model/classicsModel.php";
require_once "../Model/temp_user_model.php";
require_once "../Model/user_info_model.php";
require_once "../Business/HomeBusi.php";
require_once "../Model/sport_type_model.php";
require_once "../Model/occupationPositionModel.php";
require_once "../Model/ranked_pointsModel.php";

session_start([
    'cookie_lifetime' => 86400,
]);
if (isset($_POST["author"])&&isset($_POST["title"])&&isset($_POST["category"])&&isset($_POST["year"])&&isset($_POST["isbn"])) {
    return insertIntoClassics($_POST["author"],$_POST["title"],$_POST["category"],$_POST["year"],$_POST["isbn"]);
}

//if ($_FILES["file"]["error"] > 0) {
//    echo "error: ".$_FILES["file"]["error"];
//} else {
//    $_FILES["file"]["name"] = "b.txt";
//    move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/".$_FILES["file"]["name"]);
//    echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
//    echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
//    echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//    echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
//}

if(isset($_POST["sportType"])){
    echo getSportType();
}
//log in entrance
if (isset($_POST["email"])&&isset($_POST["uPassword"])&&isset($_POST["type"])){
    $temp = checkLoginInfo($_POST["email"],$_POST["uPassword"]);
    $_SESSION["password"] = $_POST["uPassword"]; // storing password into $_SESSION
    $emailStorage = $_POST["email"];
    setcookie(
        "email",$emailStorage,time()+86400,"/"
    );
    error_log("log in email check:".$_COOKIE["email"]);
    $_SESSION["process"] = $temp;
    echo $temp;
}

//sign up entrance
if (isset($_POST["email"])&&isset($_POST["uPassword"])&&!isset($_POST["type"])) {
    $duplicatedUser = ifRegistered($_POST["email"]);
    if ($duplicatedUser) { // user present
        echo 2;
    } else { // user not present

        //set $_COOKIE["email"], $_SESSION["password"]
        $emailStorage = $_POST["email"];
        setcookie(
            "email",$emailStorage,time()+86400,"/"
        );
        $_SESSION["password"] = $_POST["uPassword"];

        $temp = insertProcess0intoUserinfo($_POST["email"],$_POST["uPassword"]);

        if ($temp[0] == 2) {
            echo 1;
        } else {
            error_log($temp[1]);
            echo 3;
        }
    }
}

//first step of first time logging in entrance
if (isset($_COOKIE["email"])&&isset($_SESSION["password"])&&isset($_POST["processUpdate"])&&isset($_POST["username"])&&isset($_POST["phoneNum"])&&isset($_POST["gender"])&&isset($_POST["age"])&&isset($_POST["height"])&&isset($_POST["weight"])) {
    error_log("submitted");
    $temp = submitUserInfo($_COOKIE["email"],$_SESSION["password"],$_POST["username"], $_POST["phoneNum"],$_POST["gender"], $_POST["age"],$_POST["height"],$_POST["weight"],$_POST["processUpdate"]);
    if ($temp == 1) {
        echo 1;
    } else {
        $temp2 = updateUserProcess($_COOKIE["email"],$_POST["processUpdate"]);
        if ($temp2 == 2) {
            echo 2;
        } else {
            echo 3;
        }
    }
}
if (isset($_POST["selectedList"])&&isset($_POST["processUpdate"])) {
    $listOfPos = getPositionName($_POST["selectedList"]);
    echo $listOfPos;
}

if (isset($_POST["rp"])&&isset($_POST["position"])) {
    error_log("yup");
    $temp = selectFromUserinfoByEmail($_COOKIE["email"]);
    if ($temp[0] == 2) {
        $_SESSION["uid"] = extractId($temp[1]);
        $createStatus = userPositionCreation($_SESSION["uid"],$_POST["position"], $_POST["rp"]);
        if ($createStatus[0] == 2) {
            echo 1;
        } else {
            echo 0;
        }
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
    $checkStatus = selectFromUserInfoByEmailAndPassword($email, $uPassword);
    // first item is int, second is object
    if ($checkStatus[0] == 2) {
        if ($checkStatus[1]->num_rows >= 1) {
            //user present in *userinfo*, login credentials are valid
            $mysqlObject = $checkStatus[1];
            $mysqlObject->data_seek(0);
            $row = $mysqlObject->fetch_array();
            $tempId = $row["ID"];
            $process = $row["process"];
            error_log("checkLoginInfo ID check:".$tempId);
            setcookie(
                "uid",$tempId,time()+86400,"/"
            );
            error_log("cookie uid: ".$_COOKIE["uid"]);
            return $process;
        } else {
            //没有
            return -1;
        }
    } else {
        return $checkStatus[1];
    }
}

//first step of first time logging in
function submitUserInfo($email, $uPassword, $username, $phoneNum, $gender, $age, $height, $weight, $processUpdate) {
    date_default_timezone_set('PRC');
    $createdTime = date("Y-m-d H:i:s");
    $updatedTime = date("Y-m-d H:i:s");
    //TODO select from userinfo if the user is duplicated
    $checkStatus = insertIntoUserInfo($email, $uPassword, $username, $phoneNum, $gender, $age, $height, $weight, $createdTime, $updatedTime, $processUpdate);
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
            $RPname = selectFromRP();
            $processedTemp = fuseOccuPos($temp[1], $RPname[1]);
            $listOfPosition .= $processedTemp;
        }
    }
    return $listOfPosition;
}

function updateUserProcess($email, $processUpdate) {
    $a = updateTheProcess($email, $processUpdate)[0];
    return $a;
}

function userPositionCreation($userId, $game_pos_id, $level) {
    return insertIntoUserPosition($userId, $game_pos_id, $level);
}

function getUserIdByEmail($email) {
    $tempId = selectFromUserinfoByEmail($email);
    if ($tempId[0] == 2) { // works
        return extractId($tempId[1]);
    } else {
        error_log($tempId[1]);
    }
}

function ifRegistered($email) { // check if an email is present in userinfo, return true if present
    $registeredStat = selectFromUserinfoByEmail($email);
    if ($registeredStat[0] == 2) {
        if ($registeredStat[1]->num_rows>=1) {
            return true; //user present
        } else {
            return false; // user not present
        }
    } else {
        error_log($registeredStat[1]);
    }
}
