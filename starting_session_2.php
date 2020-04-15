<?php
    //starts session, so we can use session variable sin all pages
    session_start();
?>

<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>Session</title>
</head>

<body>

<ul>
    <li><a href="starting_session.php">HOME</a></li>
    <li><a href="starting_session_2.php">NOT HOME</a></li>
</ul>

<?php

echo $_SESSION['username'];

?>

</body>
</html>