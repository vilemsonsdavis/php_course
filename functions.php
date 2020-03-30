<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>Functions</title>
</head>

<body>

<?php
    function newCalc($x) {
        $new_num = $x * 0.75;
        echo "Here is 75% of number ".$x." --> ".$new_num."<br>";
    }
    newCalc(100);
    newCalc(1000);
    newCalc(145);
?>

</body>
</html>