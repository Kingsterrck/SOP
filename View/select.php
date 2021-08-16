<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$DBname = "publications";

$conn = new mysqli($servername,$username,$password,$DBname);
if ($conn -> connect_error) {
    die("failed".$conn->connect_error);
} else {
    echo "success";
    $sql = "select author, title, category from classics";
    $result = $conn->query($sql);
    print_r($result);
//if ($result->num_rows > 0) {
    for ($i=0;$i<$result->num_rows;$i++) {
        $result ->data_seek($i);
        $row = $result->fetch_array();
        echo "author: ".$row["author"]." title: ".$row["title"]." category: ".$row["category"]."<br>";
    }
    $conn ->close();
}
