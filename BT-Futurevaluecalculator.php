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
    <input type="text" name="inventment"><br>
    <input type="text" name="yearly"><br>
    <input type="text" name="number"><br>
    <button>Calculate</button>
    <br>
<!--    <input type="text" name="result">-->
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $invent= $_POST["inventment"];
    $yearl= $_POST["yearly"];
    $num= $_POST["number"];

    $result= ($invent+ ($invent*$yearl))*$num;
    echo "$result";
}
?>

</body>
</html>