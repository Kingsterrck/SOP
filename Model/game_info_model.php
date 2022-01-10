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

                $stmt = $GLOBALS["conn"]->prepare("");

            }
        }
    }
}