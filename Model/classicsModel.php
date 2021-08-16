<?php
    include_once "config.php";
function classicsSelect() {
    if ($GLOBALS["conn"] -> connect_error) {
        die("failed".$GLOBALS["conn"]->connect_error);
    } else {
        echo "success";
        $sql = "select author, title, category from classics";
        $result = $GLOBALS["conn"]->query($sql);
        if ($GLOBALS["conn"]->error){
            return [1,$GLOBALS["conn"]->error];
        }
        else{
            return [2,$result];
        }
        // $GLOBALS["conn"] ->close();
    }
}
function classicsInsert() {
    if ($GLOBALS["conn"] -> connect_error) {
        die("failed".$GLOBALS["conn"]->connect_error);
    } else {
        echo "success";
        $sql = "insert into classics(author, title, category,year,isbn) values('Lin Manuel Miranda','In The Heights','Settings','2021','234567898543')";
        $result = $GLOBALS["conn"]->query($sql);
        if ($GLOBALS["conn"] -> affected_rows > 0) {
            echo "success";
        } else {
            die("failed".$GLOBALS["conn"]->error);
        }
        // $GLOBALS["conn"] ->close();
    }
}
function classicsUpdate() {
    if ($GLOBALS["conn"] -> connect_error) {
        die("failed".$GLOBALS["conn"]->connect_error);
    } else {
        echo "success";
        $sql = "update classics set category = 'book' where year = '2021'";
        $result = $GLOBALS["conn"]->query($sql);
        if ($GLOBALS["conn"] -> affected_rows > 0) {
            echo "success";
        } else {
            die("failed".$GLOBALS["conn"]->error);
        }
    }
}
function classicsDelete() {
    if ($GLOBALS["conn"] -> connect_error) {
        die("failed".$GLOBALS["conn"]->connect_error);
    } else {
        echo "success";
        $sql = "delete from classics where year = '2021'";
        $result = $GLOBALS["conn"]->query($sql);
        if ($GLOBALS["conn"]->affected_rows > 0) {
            echo "success";
        } else {
            die("failed" . $GLOBALS["conn"]->error);
        }
    }
}