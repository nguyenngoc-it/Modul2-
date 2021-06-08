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
<form >
    <input type="text" name="product"><br>
    <input type="text" name="listprice"><br>
    <input type="text" name="discount"><br>
    <button>Calculate Discount</button>
    <br><br>
<!--    <input type="text" name="discount amount"><br>-->
<!--    <input type="text" name="discount price">-->
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $product= $_GET["product"];
    $list= $_GET["listprice"];
    $discount= $_GET["discount"];
//    $dis= $_POST["discount amount"];
//    $price=$_POST["discount price"];

    $dis= $list*$discount*0.1;
    echo "Discount Amount: $dis";
}
?>

</body>
</html>
