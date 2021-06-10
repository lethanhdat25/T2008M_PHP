<?php
include "views/session.php";
include_once "databaseSP.php";
class Controller
{

    public function Giohang($a){
        if (isset($a)) {
            $giohang = $_SESSION["cart"];
            $id = $a;
            $ds = querydb("select * from product where id = $id");
            $sp = $ds[0];
            if(!in_array($sp,$giohang)){ // Kiểm tra trong mảng đã có phần tử này chưa
                $giohang[] = $sp;
                $_SESSION["cart"] = $giohang;
            }else{

            }
        }
        include "views/danhsachgiohang.php";
    }
    public function Listsp(){
        $sql_text="select * from product";
        $dssp=querydb($sql_text);
        include "views/listsp.php";
    }
    public function ThemSp(){
        include "views/themsp.php";
    }
    public function Luusp(){
        if (isset($_POST["TenSP"],$_POST["Gia"],$_POST["Mota"])){
            $nameSP=$_POST["TenSP"];
            $priceSP=$_POST["Gia"];
            $description=$_POST["Mota"];
            $sql_text2="insert into product(id,name,price,description) value(null,'$nameSP',$priceSP,'$description')";
            if(connect()->query($sql_text2)){
                header("location:?route=listsp");
            }

        }
    }
    public function SuaSp($a){
        include_once "views/suaSP.php";
    }
    public function UpdateSp()
    {
        if (isset($_POST['id_Edit'])) {
            $id_Edit = $_POST['id_Edit'];
            echo $id_Edit;
        }

        if (isset($_POST['TenSP_Edit'])) {
            $tensp_Edit = $_POST['TenSP_Edit'];
            echo $tensp_Edit;
        }
        if (isset($_POST['Gia_Edit'])) {
            $gia_Edit = $_POST['Gia_Edit'];
            echo $gia_Edit;
        }
        if (isset($_POST['Mota_Edit'])) {
            $mota_Edit = $_POST['Mota_Edit'];
            echo $mota_Edit;
        }

        //Update
            $sql3_text = "update product set name ='$tensp_Edit',price=$gia_Edit,description='$mota_Edit' where id=$id_Edit";
            if (connect()->query($sql3_text) == true) {
                $this->Listsp();

            }
    }
}