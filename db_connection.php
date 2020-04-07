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
    $sql = "SELECT * FROM posts;";
    //this is how we connect to db and create a query
    //$conn is included form other file
    $result = mysqli_query($conn, $sql);
    //checking if we got smth from our query
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        //fetching row by row
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