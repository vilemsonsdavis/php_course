<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>superglobals</title>
</head>

<body>

<?php
    //printing out POST methods name "name" value
    echo $_POST['name'];
?>

<form method="POST">
    <input type="hidden" name="name" value="value">
    <button type="submit">PRESS ME!</button>
</form>

</body>
</html>