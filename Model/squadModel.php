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