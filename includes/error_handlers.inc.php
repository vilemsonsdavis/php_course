<?php

    //Here are shown some tips how to handle some possible errors

    if (isset($_POST['submit'])) {
        include_once 'dbh.inc.php';
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        $datetime = $_POST['datetime'];

        if (empty($subject) || empty($content) ||
            empty($datetime)){
                header("Location: ../error_handlers.php?submit_subject=empty");
        }
        else {
            //sanitize string
            if (!filter_var($subject, FILTER_SANITIZE_STRING)) {
                header("Location: ../error_handlers.php?submit_subject=invalid_subject");
            }
            else {
                # some code....
            }
        }
    }
    else {
        //in case of error lets get back on mai page
        header("Location: ../error_handlers.php?submit_subject=error");
    }