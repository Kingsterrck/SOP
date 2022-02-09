<?php
//getting the top 12 sports in the "sport_type"
function sportTypeSelect() {
    if ($GLOBALS["conn"]->connect_error) {
        die("failed".$GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("select id, type_name from sport_type limit 12");
    }
    $stmt->execute();
    if ($stmt->error) {
        //error_log(1);
        return [1, $stmt->error];
    } else {
        //error_log(2);
        return [2, $stmt->get_result()];
    }
}

function selectAllSports() {
    if ($GLOBALS["conn"]->connect_error) {
        die("failed".$GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("select id, type_name from sport_type");
        $stmt->execute();
        if ($stmt->error) {
            //error_log(1);
            return [1, $stmt->error];
        } else {
            //error_log(2);
            return [2, $stmt->get_result()];
        }
    }
}
function selectBySportId($id) {
    $p_id = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed".$GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("SELECT * FROM sport_type WHERE ID = ?");
        $stmt->bind_param("i",$p_id);
        $p_id = $id;
        error_log($stmt);
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}