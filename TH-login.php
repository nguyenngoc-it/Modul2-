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
<form style="border: 1px solid black; width: 300px"  action="" method="post">
    Username:<br>
    <input name="username" type="text" placeholder="username" ><br>
    Password:<br>
    <input name="password" type="text" placeholder="password"><br><br>
    <button>Sign in</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username= $_POST["username"];
    $pass= $_POST["password"];
    if($username=="admin" && $pass=="123"){
        echo " welcome";
    }
    else{
        echo " sai tai khoan hoac mat khau";
    }
}
?>


</body>
</html>