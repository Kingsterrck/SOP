<?php
session_start();
if (isset($_SESSION["email"])) {
    include_once "header_fsm_dropdown.php";
} else {
    echo "<script>alert('sign up or log in to create a squad');window.location.href='sign_up.php'</script>";
}
include_once "footer.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a squad | SOP</title>
    <link rel="icon" href="../../Content/imgsrc/icons/pageIcon.png">
</head>
<body></body>