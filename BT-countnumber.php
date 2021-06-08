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
    <input type="text" name="number">
    <button>Dem</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num= $_POST["number"];
//    var_dump($num);
    switch ($num)
    {
        case 0:
            echo "zero";
            break;
        case 1:
            echo "one";
            break;
        case 2:
            echo "two";
            break;
        case 3:
            echo "three";
            break;
        case 4:
            echo "four";
            break;
        case 5:
            echo "five";
            break;
        case 6:
            echo "six";
            break;
        case 7:
            echo "seven";
            break;
        case 8:
            echo "eight";
            break;
        case 9:
            echo "nine";
            break;

    }
    switch ($num){
        case 10:
            echo "ten";
            break;
        case 11:
            echo "eleven";
            break;
        case 12:
            echo "twelve";
            break;
        case 13:
            echo "thirteen";
            break;
        case 14:
            echo "fourteen";
            break;
        case 15:
            echo "firteen";
            break;
        case 16:
            echo "sixteen";
            break;
        case 17:
            echo "seventeen";
            break;
        case 18:
            echo "eighteen";
            break;
        case 19:
            echo "nineteen";
            break;
    }
}
?>
</body>
</html>