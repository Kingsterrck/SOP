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