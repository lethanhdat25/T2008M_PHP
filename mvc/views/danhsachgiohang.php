<!doctype html>
<html lang="en">
<?php include_once "head.php"?>
<?php include_once "session.php"?>
<?php include_once "databaseSP.php"?>
<body>

<h1>Danh sách GH</h1>
<?php  $ds = $_SESSION["cart"]; ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">TenSP</th>
            <th scope="col">Gia</th>
            <th scope="col">Mota</th>
        </tr>
        </thead>
        <tbody>
        <?php $total=0?>
        <?php foreach ($ds as $sp){ $total+=$sp["price"]?>
        <tr>
            <th scope="row"> <?php echo $sp["name"] ?> </th>
            <td> <?php echo $sp["price"] ?> </td>
            <td> <?php echo $sp["description"] ?> </td>
        </tr>
        <?php } ?>
        <tr>
            <th scope="row"></th>
            <td></td>
            <td> Tong tien:  <?php echo $total ?> </td>
        </tr>
        </tbody>
    </table>

</body>
</html>