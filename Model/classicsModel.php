<?php
    include_once "../config.php";
function classicsSelect() {
    if ($GLOBALS["conn"] -> connect_error) {
        die("failed".$GLOBALS["conn"]->connect_error);
    } else {
        echo "success";

        $stmt = $GLOBALS["conn"]->prepare("select author, title, category from classics");
        $stmt->execute();
        // $result = $GLOBALS["conn"]->query($sql);

        if ($stmt->error){
            error_log(1);
            return [1,$stmt->error];
        }
        else{
            error_log(2);

            return [2,$stmt->get_result()];
        }
        // $GLOBALS["conn"] ->close();
    }
}
function classicsInsert($author, $title, $category, $year, $isbn) {
    $p_author="";
    $p_title="";
    $p_category="";
    $p_year="";
    $p_isbn="";
    if ($GLOBALS["conn"] -> connect_error) {
        die("failed".$GLOBALS["conn"]->connect_error);
    } else {
        echo "success";
        //$sql = "insert into classics(author, title, category,year,isbn) values('$author','$title','$category','$year','$isbn')";

        $stmt = $GLOBALS["conn"]->prepare("insert into classics(author, title, category,year,isbn) values(?,?,?,?,?)");
        $stmt->bind_param("sssis",$p_author,$p_title,$p_category,$p_year,$p_isbn);

        $p_author = $author;
        $p_title = $title;
        $p_category = $category;
        $p_year = (int)$year;
        $p_isbn = $isbn;

        $stmt->execute();


        // $result = $GLOBALS["conn"]->query($sql);
        if ($stmt -> affected_rows > 0) {
            return [2,$stmt->affected_rows];
        } else {
            return [1,$stmt->error];
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