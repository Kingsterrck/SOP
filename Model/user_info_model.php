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

function insertIntoUserInfo($email, $uPassword, $username, $phoneNum, $gender, $age, $height, $weight, $createTime, $updatedTime) {
    $p_email = "";
    $p_uPassword = "";
    $p_username = "";
    $p_phoneNum = "";
    $p_gender= "";
    $p_age = "";
    $p_height = "";
    $p_weight = "";
    $p_createTime = "";
    $p_updatedTime = "";

    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("insert into userinfo(email,uPassword,username,phoneNum,gender,age,height,weight,createTime,updatedTime)");
        $stmt->bind_param("sssiiiiiss", $p_email, $p_uPassword, $p_username, $p_phoneNum, $p_gender, $p_age, $p_height, $p_weight, $p_createTime, $p_updatedTime);

        $p_email = $email;
        $p_uPassword = $uPassword;
        $p_username = $username;
        $p_phoneNum = $phoneNum;
        $p_gender= $gender;
        $p_age = $age;
        $p_height = $height;
        $p_weight = $weight;
        $p_createTime = $createTime;
        $p_updatedTime = $updatedTime;

            $stmt->execute();

        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}