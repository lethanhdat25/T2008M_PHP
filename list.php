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
    <h1>Danh sach hoc sinh</h1>
    <?php
        $danhsachHS=[];
        $danhsachHS[]=[
            "name"=>"le thanh dat",
            "age"=>"18"
        ];
        $danhsachHS[]=[
            "name"=>"le quang minh",
            "age"=>"12"
        ];;
        $danhsachHS[]=[
            "name"=>"le gia thinh",
            "age"=>"18"
        ];;
    ?>
    <ul>
        <?php foreach ($danhsachHS as $ds){ ?>
            <li> <?php echo $ds["name"]."---".$ds["age"]?> </li>
        <?php } ?>
    </ul>
</body>
</html>