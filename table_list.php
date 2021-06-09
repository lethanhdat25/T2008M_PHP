<!doctype html>
<html lang="en">
<?php
$cookie_name = "title";
$cookie_value = "Danh sach sinh viên";
setcookie($cookie_name,$cookie_value,time()+(60*60*24),"/"); // nạp giá trị vào cookie

?>
<?php include_once "html/head.php"?>
<body>
    <!--Navbar-->
    <?php include("navbar_table_list.php")?>
    <!--Check post add SP-->
    <?php
    if (isset($_POST['TenSP'])) {
        $tensp = $_POST['TenSP'];
    }
    if (isset($_POST['Gia'])) {
        $gia = $_POST['Gia'];
    }
    if (isset($_POST['Mota'])) {
        $mota = $_POST['Mota'];
    }
    if (isset($_POST['NCC'])) {
        $Ncc = $_POST['NCC'];
    }
    ?>
    <!--Check suaSP-->
    <?php
    if (isset($_POST['id_Edit'])) {
        $id_Edit = $_POST['id_Edit'];
    }

    if (isset($_POST['TenSP_Edit'])) {
        $tensp_Edit = $_POST['TenSP_Edit'];
    }
    if (isset($_POST['Gia_Edit'])) {
        $gia_Edit = $_POST['Gia_Edit'];
    }
    if (isset($_POST['Mota_Edit'])) {
        $mota_Edit = $_POST['Mota_Edit'];
    }
    if (isset($_POST['NCC_Edit'])) {
        $Ncc_Edit = $_POST['NCC_Edit'];
    }
    ?>
    <!--Conect database-->
    <?php include_once "databaseSP.php"?>
    <?php
        $danhsachSP=[];
        $sql_text="Select * from sanpham";
        $danhsachSP=querydb($sql_text);
    //  Insert SP
    if (isset($_POST['TenSP']) && isset($_POST['Gia']) && isset($_POST['Mota']) && isset($_POST['NCC'])) {
        $sql2_text="insert into sanpham(id,name,price,desct,ncc) value (null,'$tensp',$gia,'$mota','$Ncc')";
        if (connect()->query($sql2_text)==true){
            header("location:table_list.php");
        }
    }
    //Update
    if (isset($_POST['id_Edit']) && isset($_POST['TenSP_Edit']) && isset($_POST['Gia_Edit']) && isset($_POST['Mota_Edit']) && isset($_POST['NCC_Edit'])) {
        $sql3_text="update sanpham set name ='$tensp_Edit',price=$gia_Edit,desct='$mota_Edit',ncc='$Ncc_Edit' where id=$id_Edit";
        if (connect()->query($sql3_text)==true){
            header("location:table_list.php");
        }
    }
    ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">TenSP</th>
            <th scope="col">Gia</th>
            <th scope="col">Mo ta</th>
            <th scope="col">Ten nha cung cap</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($danhsachSP as $ds){ ?>
        <tr>
                <th scope="row"><?php echo $ds["name"] ?></th>
                <td><?php echo $ds["price"] ?></td>
                <td><?php echo $ds["desct"] ?></td>
                <td><?php echo $ds["ncc"] ?>
                    &ensp;<a href="suaSP.php?id= <?php echo $ds["id"]?>">Sua San Pham</a>
                    &ensp;<a href="danhsachgiohang.php?id= <?php echo $ds["id"]?>">Them Gio Hang</a>
                </td>
        </tr>
        <?php } ?>

        </tbody>
    </table>


    <!--BOOSTRAP JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>