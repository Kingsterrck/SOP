<?php
require_once "../config.php";
function selectBySportTypeId($sportTypeId) {
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