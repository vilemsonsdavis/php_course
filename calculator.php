<!DOCTYPE html>

<html>
<head>
<meta charet="UTF-8">
<title>My PHP Calculator</title>
</head>

<body>

<form>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operation">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Divide</option>
        <option>Multiply</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is: </p>
<?php
    if (isset($_GET['submit'])) { //check if button submit is pressed
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operation = $_GET['operation'];
        $result_calculated = True;
        switch ($operation) {
            case "Add":
                $result = $num1 + $num2;
            break;
            case "Subtract":
                $result = $num1 - $num2;
            break;
            case "Divide":
                $result = $num1 / $num2;
            break;
            case "Multiply":
                $result = $num1 * $num2;
            break;
            default:
                echo "ERROR! No method selected!";
                $result_calculated = False;
        }
        if ($result_calculated) {
            echo $result;
        }
    }
?>

</body>
</html>