<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>cookies_sessions</title>
</head>

<body>

<?php
/*
$_COOKIE
$_SESSION
*/

//setitng up cookie name = Davis, ill expire in 1 day from current time
setcookie("name", "Davis", time() + 86400);

//setting up session
$_SESSION['name'] = "12";

?>

</body>
</html>