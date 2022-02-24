<?php
function printPersonalData($data) {
    $resultString = "";
    for ($i = 0;$i<$data->num_rows;$i++) {
//            $resultString +=
        $data->data_seek($i);
        $row = $data->fetch_array();
        $username = $row["username"];
        $gender = $row["gender"];
        $age = $row["age"];
        $height = $row["height"];
        $weight = $row["weight"];
        $resultString = $username . "¡" . $gender . "¡" . $age . "¡" . $height . "¡" . $weight;
    }
    return $resultString;
}
function extractPlayerPosition($data) {
    $result = [];
    for ($i = 0;$i<$data->num_rows;$i++) {
        $data->data_seek($i);
        $row = $data->fetch_array();
        $userPosition = $row["occupation_Pos_Id"];
        $result[] = $userPosition;
    }
    return $result;
}
function sportNameExtract($data) {
    $data->data_seek(0);
    $row = $data->fetch_array();
    $tempSport = $row["type_name"];
    $GLOBALS["sportList"].= $tempSport."ç";
}