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
<form>
    <h3>Chon ngay sinh tu:</h3><input type="date" name="$fromDate"><h3>Den:</h3><input type="date" name="$toDate">
    <button>Loc</button>
    <table>
        <caption>Danh sach khach hang</caption>
        <thead>
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>Ngay sinh</th>
            <th>Dia chi</th>
            <th>Anh</th>
        </tr>

        </thead>
        <tbody>
        <?php
        include "TH-loc.php"
        ?>
        </tbody>


    </table>


</form>
</body>
</html>
