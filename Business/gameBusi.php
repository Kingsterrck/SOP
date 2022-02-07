<?php
function createGamePrintSportOption($data) {
    $resultString = "";
    for ($i = 0;$i<$data->num_rows;$i++) {
        $data->data_seek($i);
        $row = $data->fetch_array();
        $nameOfSport = $row["type_name"];
        $sportId = $row["id"];
        $resultString .= "<option value='$sportId'>$nameOfSport</option>";
    }
    return $resultString;
}
function createGamePrintGameTypeOption($data) {
    $resultString = "";
    for ($i = 0;$i<$data->num_rows;$i++) {
        $data->data_seek($i);
        $row = $data->fetch_array();
        $nameOfType = $row["type_name"];
        $sportGameTypeId = $row["id"];
        error_log($nameOfType);
        $resultString .= "<option value='$sportGameTypeId'>$nameOfType</option>";
    }
    return $resultString;
}