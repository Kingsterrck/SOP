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
    $sql = "insert into classics(author, title, category,year,isbn) values('Lin Manuel Miranda','In The Heights','Settings','2021','234567898543')";
    $result = $conn->query($sql);
    if ($conn -> affected_rows > 0) {
        echo "success";
    } else {
        die("failed".$conn->error);
    }
    $conn ->close();
}
