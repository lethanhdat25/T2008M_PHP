<!doctype html>
<html lang="en">
<?php include_once "head.php"?>
<body>
<?php  ?>
<?php include("navbar_table_list.php")?>
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
        <form name="formAdd" action="?route=luusp"  method="post">
            <th scope="row">
                <input placeholder="TenSP" name="TenSP">
            </th>
            <td>
                <input placeholder="Gia" name="Gia">
            </td>
            <td>
                <input placeholder="Mo ta" name="Mota">
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
                Them San Pham
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