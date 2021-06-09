<?php
include "views/session.php";
include_once "databaseSP.php";
class Controller
{

    public function Giohang($a){
        echo $a;
        if (isset($a)) {
            $giohang = $_SESSION["cart"];
            $id = $a;
            $ds = querydb("select * from product where id = $id");
            $sp = $ds[0];
            if(!in_array($sp,$giohang)){ // Kiểm tra trong mảng đã có phần tử này chưa
                $giohang[] = $sp;
                $_SESSION["giohang"] = $giohang;
            }
            header("Location: danhsachgiohang.php");
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
}