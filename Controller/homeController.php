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
if(isset($_POST["sportType"])){
    echo getSportType();
}
//log in entrance
if (isset($_POST["email"])&&isset($_POST["uPassword"])&&isset($_POST["type"])){
    $temp = checkLoginInfo($_POST["email"],$_POST["uPassword"]);
    $emailStorage = $_POST["email"];
    if ($temp == 1) { //not the first time
        $_SESSION["password"] = $_POST["uPassword"];
        setcookie(
            "email",$emailStorage,time()+86400,"/"
        );
        error_log($_COOKIE["email"]);
        $tempId = getUserIdByEmail($_COOKIE["email"]);
        setcookie(
            "uid",$tempId[1],time()+86400,"/"
        );
        error_log($_COOKIE["uid"]);
        echo 1;
    } else if ($temp == 2) {//log in for the first time
        setcookie(
            "email",$emailStorage,time()+86400,"/"
        );
        $_SESSION["password"] = $_POST["uPassword"];
        $tempId = getUserIdByEmail($_COOKIE["email"]);
        setcookie(
            "uid",$tempId,time()+86400,"/"
        );
        echo 2;
    } else if ($temp == 3) {
        echo 3;
    }
}

//sign up entrance
if (isset($_POST["email"])&&isset($_POST["uPassword"])&&!isset($_POST["type"])) {
    $duplicatedUser = checkTempUser($_POST["email"]);
    $emailStorage = $_POST["email"];
    setcookie(
        "email",$emailStorage,time()+86400,"/"
    );
    $_SESSION["password"] = $_POST["uPassword"];
    if ($duplicatedUser) {
        $temp = insertIntoTempUser($_POST["email"],$_POST["uPassword"]);

        echo "1¿$temp";
    } else {
        echo "2¿this email has been registered, go to login page";
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
    $temp = selectByEmail($_COOKIE["email"]);
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
    if ($checkStatus[0] == 2) {
        if ($checkStatus[1]->num_rows >= 1) {
            //在userinfo里面有

//            put user id into $_SESSION
            $checkStatus[1]->data_seek(0);
            $row = $checkStatus[1]->fetch_array();
            $_SESSION["uid"] = $row["ID"];
            error_log("session uid: ".$_SESSION["uid"]);
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
    $tempId = selectByEmail($email);
    if ($tempId[0] == 2) {
        return extractId($tempId[1]);
    } else {
        error_log($tempId[1]);
    }
}