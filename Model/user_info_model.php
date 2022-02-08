<?php

include_once "../config.php";
function selectUserByUsernameAndPassword($email, $uPassword) {
    $p_email = "";
    $p_uPassword = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt =$GLOBALS["conn"]->prepare("select * from userinfo where email=? and u_password=?");
        $stmt->bind_param("ss", $p_email,$p_uPassword);

        $p_email = $email;
        $p_uPassword = $uPassword;

        $stmt->execute();

        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}

//first step of first time logging in
function insertIntoUserInfo($email, $uPassword, $username, $phoneNum, $gender, $age, $height, $weight, $createdTime, $updatedTime) {
    $p_email = "";
    $p_uPassword = "";
    $p_username = "";
    $p_phoneNum = "";
    $p_gender= "";
    $p_age = "";
    $p_height = "";
    $p_weight = "";
    $p_createdTime = "";
    $p_updatedTime = "";

    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("insert into userinfo(email,u_password,username,phoneNum,gender,age,height,weight,createdTime,updatedTime) values(?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssiiiiss", $p_email, $p_uPassword, $p_username, $p_phoneNum, $p_gender, $p_age, $p_height, $p_weight, $p_createdTime, $p_updatedTime);

        $p_email = $email;
        $p_uPassword = $uPassword;
        $p_username = $username;
        $p_phoneNum = $phoneNum;
        $p_gender= $gender;
        $p_age = $age;
        $p_height = $height;
        $p_weight = $weight;
        $p_createdTime = $createdTime;
        $p_updatedTime = $updatedTime;

            $stmt->execute();
        error_log($stmt->error);
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->affected_rows];
        }
    }
}

function spaceGetInfo($email) {
    $p_email = "";
    if($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("select username, gender, age, height, weight from userinfo where email=?");
        $stmt->bind_param("s",$p_email);
        $p_email = $email;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}

function getUsernameByEmail($email) {
    $p_email = "";
    if($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("select username from userinfo where email=?");
        $stmt->bind_param("s",$p_email);
        $p_email = $email;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}
function updateTheProcess($email, $processUpdate) {
    $p_email = "";
    $p_processUpdate = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("UPDATE userinfo SET process = ? WHERE email = ?");
        $stmt->bind_param("is",$p_processUpdate,$p_email);
        $p_processUpdate = $processUpdate;
        $p_email = $email;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->affected_rows];
        }
    }
}