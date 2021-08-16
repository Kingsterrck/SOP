<?php
include_once "../Model/classicsModel.php";

function getData(){
    $resultString = "";
    $data = classicsSelect();
    if ($data[0]==1){
        return $data[1];
    }else{
        $result = $data[1];
        for ($i = 0;$i<$result->num_row;$i++) {
//            $resultString +=
            $result->data_seek($i);
              $row = $result->fetch_array();
//            echo "author: ".$row["author"]." title: ".$row["title"]." category: ".$row["category"]."<br>";
            $author = $row["author"];
            $resultString += "<div class='row'>$author</div>";
        }
        return $resultString;
    }
}