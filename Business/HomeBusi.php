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