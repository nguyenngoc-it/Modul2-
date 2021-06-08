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
<form action="" method="post">
    <h1>Tu Dien Anh - Viet</h1><br>
    <input type="text" name="search" placeholder="nhap tu can tim">
    <button>Tim</button>
</form>
<?php
$dictionary =[
        "hello"=> " xin chao",
        "how"=> " the nao",
        "book"=> "quyen vo",
        "computer"=> "may tinh"
];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $searchWord=$_POST["search"];
    $flag=0;
    foreach ($dictionary as $word =>$dictionary){
        if($word== $searchWord){
            echo "tu: ".$word.".<br/>duoc dich la: ".$dictionary;
            echo "<br/>";
            $flag=1;
        }
    }
    if($flag==0){
        echo "khong tim thay tu can search";
    }
}
?>
</body>
</html>