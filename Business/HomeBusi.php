<?php
function getClassicStr($data){
    $resultString = "";
    for ($i = 0;$i<$data->num_rows;$i++) {
//            $resultString +=
        $data->data_seek($i);
        $row = $data->fetch_array();
//            echo "author: ".$row["author"]." title: ".$row["title"]." category: ".$row["category"]."<br>";
        $author = $row["author"];
        $resultString .= "<div class='row'>$author</div>";

    }
    return $resultString;
}
function gettingSportType($data) {
    $resultString = "";
    for ($i = 0;$i<$data->num_rows;$i++) {
//            $resultString +=
        $data->data_seek($i);
        $row = $data->fetch_array();
        $sport = $row["type_name"];
        $dataId = $row["id"];
        $resultString .= "<a href='#' class='secondStepSport' dataId='$dataId'>$sport</a>";
    }
    return $resultString;
}

function fuseOccuPos($data, $data2) { //data is the occupation position and data2 is RP level name
    $resultString = "";
    $resultString2 = "";
    for ($i = 0;$i<$data->num_rows;$i++) {
        $data->data_seek($i);
        $row = $data->fetch_array();
        $nameOfPos = $row["position_name"];
        $positionId = $row["id"];
        $resultString .= "<option value='$positionId'>$nameOfPos</option>";
    }
    for ($i = 0;$i<$data2->num_rows;$i++) {
        $data2->data_seek($i);
        $row = $data2->fetch_array();
        $levelName = $row["rank_name"];
        $levelNum = $row["lowest_point"];
        $resultString2 .= "<option value='$levelNum'>$levelName</option>";
    }
    $resultString = "<div class='eachOfTheSport'><h2 class='titleTarget'></h2><select class='shortLoginBox' name='rp'>$resultString2</select><select class='shortLoginBox' style='float: none' name='position'>$resultString</select></div>";
    return $resultString;
}
function extractId($data) {
    $data->data_seek(0);
    $row = $data->fetch_array();
    $id = $row["ID"];
    return $id;
}