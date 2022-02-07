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

                $stmt = $GLOBALS["conn"]->prepare("SELECT title, game_time, location FROM game_info WHERE game_time ");

            }
        }
    }
}
function insertNewGame($title, $gameType, $gameTime, $rp, $location, $description) {
    $p_title = "";
    $p_gameType = "";
    $p_gameTime = "";
    $p_rp = "";
    $p_location = "";
    $p_description = "";
    date_default_timezone_set('PRC');
    $createTime = date("Y-m-d H:i:s");
    $updateTime = date("Y-m-d H:i:s");
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("INSERT INTO game_info(title, game_type_id, game_time, recommend_rp, location, intro, create_time, update_time) values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sisissss", $p_title, $p_gameType, $p_gameTime, $p_rp, $p_location, $p_description, $createTime, $updateTime);
        $p_title = $title;
        $p_gameType = $gameType;
        $p_gameTime = $gameTime;
        $p_rp = $rp;
        $p_location = $location;
        $p_description = $description;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->affected_rows];
        }
    }
}
function getTodayGamesBySportTypeId($sport_type_id) {
    $p_sport_type_id = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {

    }
}