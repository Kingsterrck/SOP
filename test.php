<?php
//echo "123123123";
date_default_timezone_set('PRC');
if (isset($_POST["name"])&&isset($_POST["location"])) {
    //echo 232323;
    giveBack($_POST["name"], $_POST["location"]);
}
function giveBack($name, $location) {
    $linked = $name . $location;
    echo date('l dS \of F Y h:i:s A');
}