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
    <h1>List SV</h1>
    <a href="?route=themsp">ThemSv</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">TenSP</th>
            <th scope="col">Gia</th>
            <th scope="col">Mo ta</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($dssp as $ds){ ?>
            <tr>
                <th scope="row" style="display:none"><?php echo $ds["id"] ?></th>
                <th scope="row"><?php echo $ds["name"] ?></th>
                <td><?php echo $ds["price"] ?></td>
                <td><?php echo $ds["description"] ?>
                    &ensp;<a href="">Sua San Pham</a>
                    &ensp;<a href="?giohangid=<?php echo $ds["id"] ?>">Them Gio Hang</a>
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