<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>Title</title>
</head>

<body>

<?php
    $x = 5;
    $y = "5";

    //xor statement is true if only one of two statements
    // are true, if both false = false;
    //if both true = false; if one true, other false = true
    if (1 == 1 xor $x === $y) {
        echo "statement was true";
    }
?>

</body>
</html>