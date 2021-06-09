<!doctype html>
<html lang="en">
<?php include_once "html/head.php"?>
<?php include_once "session.php"?>
<?php include_once "databaseSP.php"?>
<body>
<?php
if (isset($_GET["id"])) {
    $giohang = $_SESSION["giohang"];
    $id = $_GET["id"];
    $ds = querydb("select * from sanpham where id = $id");
    $sp = $ds[0];
    if(!in_array($sp,$giohang)){ // Kiểm tra trong mảng đã có phần tử này chưa
        $giohang[] = $sp;
        $_SESSION["giohang"] = $giohang;
    }
    header("Location: table_list.php");
}
?>
<h1>Danh sách GH</h1>
<?php  $ds = $_SESSION["giohang"]; ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">TenSP</th>
            <th scope="col">Gia</th>
            <th scope="col">Mota</th>
            <th scope="col">Ten nha cung cap</th>
        </tr>
        </thead>
        <tbody>
        <?php $total=0?>
        <?php foreach ($ds as $sp){ $total+=$sp["price"]?>
        <tr>
            <th scope="row"> <?php echo $sp["name"] ?> </th>
            <td> <?php echo $sp["price"] ?> </td>
            <td> <?php echo $sp["desct"] ?> </td>
            <td> <?php echo $sp["ncc"] ?> </td>
        </tr>
        <?php } ?>
        <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td> Tong tien:  <?php echo $total ?> </td>
        </tr>
        </tbody>
    </table>

</body>
</html>