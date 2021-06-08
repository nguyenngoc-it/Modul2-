<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100% ;
        }
        th,td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<!--<form style="border: 1px solid black; width: 800px" action="">-->

    <table style="width: 100%">
        <caption>  <h2 style="text-align: center">Danh sach khach hang</h2></caption>
        <thead>
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>Ngay sinh</th>
            <th>Dia chi</th>
            <th>Anh</th>
        </tr>
        </thead>
        <?php
        $customerList= [
            "1"=> [
                "ten"=> "Nguyễn Thị Bưởi",
                "ngaysinh"=> "2000-01-01",
                "diachi"=> "Hà nội",
                "anh"=> "img/1.jpeg",

            ],
            "2"=> [
                "ten"=> "Nguyễn Thị Bưởi",
                "ngaysinh"=> "2000-01-01",
                "diachi"=> "Hà nội",
                "anh"=> "img/2.jpeg",
            ]
        ];

        ?>
        <tbody>
        <?php foreach ($customerList as $key => $value): ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $value["ten"]?></td>
                <td><?php echo $value["ngaysinh"]?></td>
                <td><?php echo $value["diachi"]?></td>
                <td><img src="<?php echo $value["anh"]?>" width="50" alt="asdad"></td>
            </tr>
        <?php endforeach;?>

        </tbody>

    </table>





</body>
</html>

<!--nguyenngoc@nguyenngoc:~$ cd /var/www-->
<!--nguyenngoc@nguyenngoc:/var/www$ sudo chmod -R 777 html-->
<!--[sudo] password for nguyenngoc:-->
<!--nguyenngoc@nguyenngoc:/var/www$ cd html-->

