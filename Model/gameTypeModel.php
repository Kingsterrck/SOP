<?php
require_once "../config.php";
function selectFromGameTypeByGameTypeId($sportTypeId) {
    $p_sportTypeId = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("SELECT * FROM game_type WHERE sport_type_id = ?");
        $stmt->bind_param("i",$p_sportTypeId);
        $p_sportTypeId = $sportTypeId;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}
function selectFromGameTypeById($sportId) {
    $p_sportTypeId = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("SELECT * FROM game_type WHERE id = ?");
        $stmt->bind_param("i",$p_sportTypeId);
        $p_sportTypeId = $sportId;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}