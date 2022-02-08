<?php
require_once "../config.php";
function insertIntoUserGame($userId, $gameInfoId) {
    $p_userId = "";
    $p_gameInfoId = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt =$GLOBALS["conn"]->prepare("INSERT INTO user_game(user_id, game_info_id) values(?,?)");
        $stmt->bind_param("ii",$p_userId, $p_gameInfoId);
        $p_userId = $userId;
        $p_gameInfoId = $gameInfoId;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->affected_rows];
        }
    }
}