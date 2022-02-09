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
                error_log($gameTypeId);
                $p_gameTypeId = "";
                $todaysDate = date("Y-m-d")."%";

                $stmt = $GLOBALS["conn"]->prepare("SELECT id, title, game_time, location FROM game_info WHERE game_time LIKE ? AND game_type_id = ?");
                $stmt->bind_param("si",$todaysDate, $p_gameTypeId);
                $p_gameTypeId = $gameTypeId;
                $stmt->execute();
                if ($stmt->error) {
                    return [1, $stmt->error];
                } else {
                    return [2, $stmt->get_result()];
                }
            }
        }
    }
}
function insertNewGame($title, $gameType, $gameTime, $rp, $location, $description, $creator) {
    $p_title = "";
    $p_gameType = "";
    $p_gameTime = "";
    $p_rp = "";
    $p_location = "";
    $p_description = "";
    $p_creator = "";
    date_default_timezone_set('PRC');
    $createTime = date("Y-m-d H:i:s");
    $updateTime = date("Y-m-d H:i:s");
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("INSERT INTO game_info(title, game_type_id, game_time, recommend_rp, location, intro, create_time, update_time, creator) values(?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sisisssss", $p_title, $p_gameType, $p_gameTime, $p_rp, $p_location, $p_description, $createTime, $updateTime, $p_creator);
        $p_title = $title;
        $p_gameType = $gameType;
        $p_gameTime = $gameTime;
        $p_rp = $rp;
        $p_location = $location;
        $p_description = $description;
        $p_creator = $creator;
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

function getGameInfoByGameId($gameId) {
    $p_gameId = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("SELECT * FROM game_info WHERE id = ?");
        $stmt->bind_param("i", $p_gameId);
        $p_gameId = $gameId;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}
function getGameIdByCreatorAndDate($username) {
    $p_username = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("SELECT id FROM game_info WHERE creator = ? ORDER BY create_time DESC LIMIT 1");
        $stmt->bind_param("s",$p_username);
        $p_username = $username;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}