<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
    First operand : <input type="text" name="firstnum"><br>
    Operator : <select name="select">
        <option value="cong">+</option>
        <option value="tru">-</option>
        <option value="nhan">*</option>
        <option value="chia">/</option>
    </select><br>
    Second operand: <input type="text" name="number2"><br>
    <button>calculate</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["firstnum"];
    $num2 = $_POST["number2"];
    switch ($_POST["select"]) {

        case "cong":
            $result = $num1 + $num2;
            echo "$result";
            break;
        case "tru":
            $result = $num1 - $num2;
            echo "$result";
            break;
        case "nhan":
            $result = $num1 * $num2;
            echo "$result";
            break;
        case "chia":
            $result = $num1 / $num2;
            echo "$result";
            break;
    }

}
?>

</body>
</html>
