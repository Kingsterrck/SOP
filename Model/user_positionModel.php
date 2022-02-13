<?php
require_once "../config.php";

function insertIntoUserPosition($userId, $gamePosId, $level) {
    $p_userId = "";
    $p_gamePosId = "";
    $p_level = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("INSERT INTO user_position(user_ID, occupation_Pos_id, level) VALUES(?,?,?))");
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