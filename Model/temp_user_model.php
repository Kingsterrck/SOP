<?php

include_once "../config.php";
function tempUserSelect($email, $uPassword)
{
    $p_email = "";
    $p_uPassword="";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        if ($uPassword=="¡"){
            $stmt = $GLOBALS["conn"]->prepare("select * from temp_user where email=? ");
            $stmt->bind_param("s",$p_email);
            $p_email = $email;
        }else{
            $stmt = $GLOBALS["conn"]->prepare("select * from temp_user where email=? and uPassword =?");
            $stmt->bind_param("ss",$p_email,$p_uPassword);
            $p_email = $email;
            $p_uPassword = $uPassword;
        }


        $stmt->execute();
        // $result = $GLOBALS["conn"]->query($sql);

        if ($stmt->error) {
            //error_log(1);
            return [1, $stmt->error];
        } else {
            //error_log(2);

            return [2, $stmt->get_result()];
        }
        // $GLOBALS["conn"] ->close();
    }
}

function tempUserInsert($email, $uPassword, $createTime, $updateTime, $state)
{
    $p_email = "";
    $p_uPassword = "";
    $p_createTime = date("Y-m-d H:i:s");
    $p_updateTime = date("Y-m-d H:i:s");
    $p_state = 1;
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        //$sql = "insert into classics(author, title, category,year,isbn) values('$author','$title','$category','$year','$isbn')";

        $stmt = $GLOBALS["conn"]->prepare("insert into temp_user(email,uPassword,createTime,updateTime,state) values(?,?,?,?,?)");
        $stmt->bind_param("ssssi", $p_email, $p_uPassword, $p_createTime, $p_updateTime, $p_state);

        $p_email = $email;
        $p_uPassword = $uPassword;
        $p_createTime = $createTime;
        $p_updateTime = $updateTime;
        $p_state = (int)$state;

        $stmt->execute();


        // $result = $GLOBALS["conn"]->query($sql);
        if ($stmt->affected_rows > 0) {
            return [2, $stmt->affected_rows];
        } else {
            return [1, $stmt->error];
        }
        // $GLOBALS["conn"] ->close();
    }
}