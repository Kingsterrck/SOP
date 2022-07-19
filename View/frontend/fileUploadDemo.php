<?php

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Upload the file</h1>
    <form action="../../Controller/homeController.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit">
    </form>
</body>