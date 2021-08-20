<?php
include_once "../Model/classicsModel.php";

if (isset($_POST["author"])&&isset($_POST["title"])&&isset($_POST["category"])&&isset($_POST["year"])&&isset($_POST["isbn"])) {
    return insertIntoClassics($_POST["author"],$_POST["title"],$_POST["category"],$_POST["year"],$_POST["isbn"]);

}

function insertIntoClassics($author, $title, $category, $year, $isbn) {
    $insertStatus = classicsInsert($author, $title, $category, $year, $isbn);
    if ($insertStatus[0] == 2) {
        return $insertStatus[1];
    } else {
        echo $insertStatus[1];
    }
}

function getData(){
    $resultString = "";
    $data = classicsSelect();
    if ($data[0]==1){ //error
        echo $data[1];
    }else{
        $result = $data[1];
        for ($i = 0;$i<$result->num_rows;$i++) {
//            $resultString +=
            $result->data_seek($i);
              $row = $result->fetch_array();
//            echo "author: ".$row["author"]." title: ".$row["title"]." category: ".$row["category"]."<br>";
            $author = $row["author"];
            $resultString .= "<div class='row'>$author</div>";
        }
        return $resultString;
    }
}