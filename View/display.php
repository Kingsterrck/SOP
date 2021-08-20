<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .row {
            font-size: larger;
            color: aquamarine;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
require_once "../Controller/homeController.php";
$data = getData();
echo $data;
?>


</body>
</html>
