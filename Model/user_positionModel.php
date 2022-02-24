<?php
require_once "../config.php";

function insertIntoUserPosition($userId, $gamePosId, $level) {
    $p_userId = "";
    $p_gamePosId = "";
    $p_level = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("INSERT INTO sop.user_position(user_ID, occupation_Pos_id, level) VALUES(?,?,?))");
        $stmt->bind_param("iii", $p_userId, $p_gamePosId, $p_level);
        $p_userId = $userId;
        $p_gamePosId = $gamePosId;
        $p_level = $level;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->affected_rows];
        }
    }
}
function selectFromUserPositionByUserId($uid) {
    $p_uid = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("SELECT * FROM sop.user_position WHERE user_ID = ?");
        $stmt->bind_param("i",$p_uid);
        $p_uid = $uid;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}
function selectFromUserPositionByUserIdLimited($uid) {
    $p_uid = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("SELECT * FROM sop.user_position WHERE user_ID = ? LIMIT 3");
        $stmt->bind_param("i",$p_uid);
        $p_uid = $uid;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}