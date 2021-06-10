<?php
include_once "controllers/Controller.php";
$suaSpid=isset($_GET["suaSpid"])?$_GET["suaSpid"]:"";
$giohangid=isset($_GET["giohangid"])?$_GET["giohangid"]:"";
$route= isset($_GET["route"])?$_GET["route"]:"";
$controller=new Controller();
switch ($route){
    case "listsp":
        $controller->Listsp();
        break;
    case "themsp":
        $controller->ThemSp();
        break;
    case "luusp":
        $controller->Luusp();
        break;
    case "updateSP":
        $controller->UpdateSp();
}
    if ($giohangid) $controller->Giohang($giohangid);
    if ($suaSpid) $controller->SuaSp($suaSpid);