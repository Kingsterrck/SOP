<?php
require_once "../config.php";

function squadSeachName($name) {
    $p_name = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("SELECT * FROM squad WHERE squad_name = ?");
        $stmt->bind_param("s",$p_name);
        $p_name = $name;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->get_result()];
        }
    }
}
function createNewSquad($creator, $title, $game_type_id, $description, $create_time, $update_time) {
    $p_creator = "";
    $p_title = "";
    $p_game_type_id = "";
    $p_description = "";
    $p_create_time = "";
    $p_update_time = "";
    if ($GLOBALS["conn"]->connect_error) {
        die("failed" . $GLOBALS["conn"]->connect_error);
    } else {
        $stmt = $GLOBALS["conn"]->prepare("INSERT INTO squad(creator, squad_name, game_type_id, intro, create_time, update_time) VALUES(?,?,?,?,?,?)");
        $stmt->bind_param("ssisss", $p_creator, $p_title, $p_game_type_id, $p_description, $p_create_time, $p_update_time);
        $p_creator = $creator;
        $p_title = $title;
        $p_game_type_id = $game_type_id;
        $p_description = $description;
        $p_create_time = $create_time;
        $p_update_time = $update_time;
        $stmt->execute();
        if ($stmt->error) {
            return [1, $stmt->error];
        } else {
            return [2, $stmt->affected_rows];
        }
    }
}