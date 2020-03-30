<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>Scheduled message</title>
<link rel="stylesheet" type="text/css" href="style_scheduled_msg.css">
</head>

<body>

<?php
    $day = date("w");
    
    switch ($day) {
        case 1:
            echo "<p>Its Monday</p>";
            break;
        case 2:
            echo "<p>Its Tuesday</p>";
            break;
        case 3:
            echo "<p>Its Wednesday</p>";
            break;
        case 4:
            echo "<p>Its Thursday</p>";
            break;
        case 5:
            echo "<p>Its Friday</p>";
            break;
        case 6:
            echo "<p>Its Saturday</p>";
            break;        
        case 7:
            echo "<p>Its Sunday</p>";
             break;
    }
?>

</body>
</html>