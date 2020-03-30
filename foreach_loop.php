<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>Foreach loop</title>
</head>

<body>

<?php
    $names = array("Kate", "Karin", "Jessica");

    //reads every element of an array
    foreach ($names as $name) {
        echo "My name is ".$name."<br>";
    }
?>

</body>
</html>