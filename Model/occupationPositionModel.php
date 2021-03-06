<?php

include_once "../config.php";
function selectOccupationPositionBySportId($sportTypeId) {
    $p_sportTypeId = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("select * from occupation_pos where sport_type_id = ?");
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
function selectFromOccupationPositionByPositionName($positionName) {
    $p_positionName = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("select * from occupation_pos where position_name = ?");
        $stmt->bind_param("s",$p_positionName);
        $p_positionName = $positionName;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}