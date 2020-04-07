<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>Database connection</title>
</head>

<body>
<!-- with action we call the code which will be run,
when the button will be pressed. With methd we save 
input data into superglobal $_POST-->
<form action="subject_input.inc.php" method="POST">
    <input type="text" name="subject" placeholder="Subject">
    <br>
    <input type="text" name="content" placeholder="Content">
    <br>
    <input type="text" name="datetime" placeholder="YYYY-MM-DD HH:MM:SS">
    <br>
    <button type="submit" name="submit">Enter some subject!</button>
</form>

</body>
</html>