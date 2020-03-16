<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>My Output</title>
</head>

<body>
<form method="GET">
    <input type="text" name="person">
    <button>SUBMIT</button>
</form>

<?php
    #with "$_" we call the method
    //comment
    $name = $_GET['person'];
    /*when put variable into echo, you have to put point after it
    to avoid error*/ 
    echo $name. " is a handsome guy";
?>

</body>
</html>