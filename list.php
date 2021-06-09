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
        $servername="localhost";
        $username="root";
        $password="";
        $db="t2008m_php";
        $conn=new mysqli($servername,$username,$password,$db);
        if($conn->connect_error){
            die("Connect error..........");
        }
        $sql_text="select * from sinhvien";
        $rs=$conn->query($sql_text);
        $ds=[];
        if($rs->num_rows>0){
            while ($row =$rs->fetch_assoc()){
                $ds[]= $row;
            }
        }
    ?>
    <ul>

        <?php foreach ($ds as $dsSV){?>
            <li> <a href="chitiet.php?id=<?php echo $dsSV["id"]?>"> <?php echo $dsSV["name"]?> </a></li>
        <?php }?>
    </ul>
</body>
</html>