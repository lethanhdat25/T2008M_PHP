<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    BOOSTRAP CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!--Navbar-->
<?php include("navbar_table_list.php")?>
<!--Conect database-->
<?php include_once "databaseSP.php"?>
<?php

$id=$a;
$SP=null;
$sql_text="Select * from product where id= $id";
$SP=querydb($sql_text);
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">TenSP</th>
        <th scope="col">Gia</th>
        <th scope="col">Mo ta</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form name="formAdd" action="?route=updateSP" method="post">
            <input type="hidden" name="id_Edit" value="<?php echo $SP[0]["id"]?>">

            <th scope="row">
                <input placeholder="TenSP" name="TenSP_Edit" value="<?php echo $SP[0]["name"]?>">
            </th>
            <td>
                <input placeholder="Gia" name="Gia_Edit" value="<?php echo $SP[0]["price"]?>">
            </td>
            <td>
                <input placeholder="Mo ta" name="Mota_Edit" value="<?php echo $SP[0]["description"]?>">
            </td>
            <button style="
                    background-color: darkblue;
                    float:left;
                    border: none;
                    color: white;
                    height: 50px;
                    margin: 10px 10px;
                    padding: 10px"
                    type="submit" >
                Sua San Pham
            </button>
        </form>

    </tr>
    </tbody>
</table>

<!--BOOSTRAP JS-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>