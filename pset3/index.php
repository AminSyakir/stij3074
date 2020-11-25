<?php
require 'functions.php';
$foods = query("SELECT * FROM pset3");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

    <h1>Food Menu</h1>

    <a class="add" href="add.php">Add New Menu</a>
    <br><br>


    <br>


    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Calorie</th>
        </tr>


        <?php $i = 1; ?>
        <?php foreach ($foods as $food) : ?>

            <tr>
                <td><?= $i; ?></td>
                <td><?= $food["name"]; ?></td>
                <td><?= $food["price"]; ?></td>
                <td><?= $food["quantity"]; ?></td>
                <td><?= $food["calorie"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>

    </table>

</body>

</html>