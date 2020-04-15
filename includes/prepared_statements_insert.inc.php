<?php
    include_once 'dbh.inc.php';

    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $datetime = mysqli_real_escape_string($conn, $_POST['datetime']);

    $sql = "INSERT INTO posts (subject, content, date)
        VALUES (?, ?, ?);";
    //prepared stmt
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL error";
    } else {
        mysqli_stmt_bind_param($stmt, "sss", $subject, $content, $datetime);
        mysqli_stmt_execute($stmt);
    }

    header("Location: db_connection_2_insertion.php");