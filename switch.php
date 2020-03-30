<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>Switch</title>
</head>

<body>

<?php
    $x = 3;
    // switch statement is actually same as in cpp, python etc
    switch ($x) {
        case 1:
            echo "its case one";
            break;
        case 2:
            echo "its case two";
            break;
        default:
            echo "its unknown case";
    }
?>

</body>
</html>