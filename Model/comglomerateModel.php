<?php
//this model is used to access more than one database table.

function selectFromOccuPosAndSportTypeBySportTypeId($sportTypeId) {
    $p_sportTypeId = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("SELECT * FROM occupation_pos, sport_type WHERE occupation_pos.sport_type_id = sport_type.?");
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
function selectFromOccuPosAndSportTypeByOccuPosId($occuPosId) {
    $p_occuPosId = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("SELECT * FROM occupation_pos, sport_type WHERE occupation_pos.sport_type_id = sport_type.ID AND occupation_pos.id = ?");
        $stmt->bind_param("i",$p_occuPosId);
        $p_occuPosId = $occuPosId;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}