<?php
    include_once 'dbh.inc.php';

    //getting information from superglobal $_POST which used for forms
    //use "mysqli_real_escape_string($conn," to avoid sql injection
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $datetime = mysqli_real_escape_string($conn, $_POST['datetime']);

    $sql = "INSERT INTO posts (subject, content, date)
        VALUES ('$subject', '$content', '$datetime');";
    mysqli_query($conn, $sql);

    //this is how after this code ran we get back to main page
    header("Location: db_connection_2_insertion.php");