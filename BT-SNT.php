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
<!--<form   method="post" >-->
<!--    <input type="text" name="number">-->
<!--</form>-->

<?php
//$num=$_POST["number"];

function check ($num)

{
    $kt=true;
    if ($num < 2) {
        $kt= false;
//        return false;
    } else if ($num > 2) {
        for ($i = 2; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $kt=false;
//                return false;
            }
        }
//        return true;
        $kt=true;
    }
}
    for ($i=0; $i<=100; $i++){
        if(check($i)){
            echo "$i ' '";
        }
    }


//
//function show()
//{
//
//        for ($i = 0; $i <= 100; $i++) {
//            if (check($i)) {
//           echo "$i ' ' ";
//        }
//    }
//}
//show();



?>
</body>
</html>
// cach truy xuat cac phan tu trong mang