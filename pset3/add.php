<?php
require 'functions.php';

// check apakah button submit sudah ditekan atau belum
if (isset($_POST["submit"])) {



    // check adakah data berhasil ditambahkan atau tidak
    if (add($_POST) > 0) {
        echo "
            <script>
                alert('Add Successful!');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Add Fail!');
                document.location.href = 'index.php'
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Menu</title>
</head>

<body>
    <h1>Add New Menu</h1>

    <form method="post" action="" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="name">Name : </label>
                <input type="text" name="name" id="name" required>
            </li>
            <li>
                <label for="price">Price : </label>
                <input type="text" name="price" id="price" required>
            </li>
            <li>
                <label for="quantity">Quantity : </label>
                <input type="text" name="quantity" id="quantity" required>
            </li>
            <li>
                <label for="calorie">Calorie : </label>
                <input type="text" name="calorie" id="calorie" required>
            </li>
            <li>
                <button type="submit" name="submit">Submit!</button>
            </li>
        </ul>
    </form>

</body>

</html>