<?php
include_once "controllers/Controller.php";
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
}
    if ($giohangid)
    $controller->Giohang($giohangid);