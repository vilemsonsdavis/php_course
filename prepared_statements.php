<?php
    include_once 'dbh.inc.php';
?>

<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>Database connection</title>
</head>

<body>

<?php
    $subj = "Math";
    //statement, ? mark is mandatory
    $sql = "SELECT * FROM posts WHERE subject=?;";
    //prepared statement
    $stmt = mysqli_stmt_init($conn);
    //prepare the prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed!";
    } else {
        //bind parameters to placeholders
        //1x "s" stands for 1 replacing variable in sql statement
        // 2x "ss" would be if there would be 2
        mysqli_stmt_bind_param($stmt, "s", $subj);
        //run parameters inside db
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            //iterating through columns rows and printing out
            foreach ($row as $key => $value) {
                echo "$key: $value<br>";
            }
        }
    }
?>

</body>
</html>