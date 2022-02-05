<?php
require_once "../config.php";
function getGameInfoBySport($sportName) {
    //getting the sport type ID from sport_type
    $p_sportName = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("select ID from sport_type where type_name = ?");
        $stmt->bind_param("s",$p_sportName);
        $p_sportName = $sportName;
        $stmt->execute();
        if ($stmt->error) {
            return $stmt->error;
        } else {
            //processing the data
            $sportType = $stmt->get_result();
            $sportType->data_seek(0);
            $row = $sportType->fetch_array();
            $sportTypeId = $row["ID"];//it works til here!!

            //get game type id from game_type
            $p_sportTypeId = "";
            $stmt = $GLOBALS["conn"]->prepare("SELECT id FROM game_type where sport_type_id = ?");
            $stmt->bind_param("i",$p_sportTypeId);
            $p_sportTypeId = $sportTypeId;
            $stmt->execute();

            if ($stmt->error) {
                return $stmt->error;
            } else {
                //processing the data
                $gameType = $stmt->get_result();
                $gameType->data_seek(0);
                $row = $gameType->fetch_array();
                $gameTypeId = $row["id"];

                $stmt = $GLOBALS["conn"]->prepare("SELECT title, game_time, location FROM game_info ");

            }
        }
    }
}
function insertNewGame($title, $sport, $gameTime, $rp, $location, $description) {
    $p_title = "";
    $p_sport = "";
    $p_gameTime = "";
    $p_rp = "";
    $p_location = "";
    $p_description = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("INSERT INTO game_info(title, game_type_id, game_time, recommend_rp, location, intro) values(?,?,?,?,?,?)");
        $stmt->bind_param("sisiss", $p_title, $p_sport, $p_gameTime, $p_rp, $p_location, $p_description);
        $p_title = $title;
        $p_sport = $sport;
        $p_gameTime = $gameTime;
        $p_rp = $rp;
        $p_location = $location;
        $p_description = $description;
        error_log("executing!!");

        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->affected_rows];
        }
    }
}