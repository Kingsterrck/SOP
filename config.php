<?php
$GLOBALS["servername"] = "127.0.0.1";
$GLOBALS["username"] = "root";
$GLOBALS["password"] = "root";
$GLOBALS["DBname"] = "publications";

$GLOBALS["conn"]= new mysqli($GLOBALS["servername"],$GLOBALS["username"],$GLOBALS["password"],$GLOBALS["DBname"]);
