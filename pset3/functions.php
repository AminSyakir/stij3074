<?php
// connect ke database
$conn = mysqli_connect("localhost", "root", "", "stij3074");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function add($data)
{
    global $conn;

    $name = htmlspecialchars($data["name"]);
    $price = htmlspecialchars($data["price"]);
    $quantity = htmlspecialchars($data["quantity"]);
    $colarie = htmlspecialchars($data["calorie"]);


    // query insert ada
    $query = "INSERT INTO pset3
              VALUES
              ('', '$name', '$price', '$quantity', '$colarie')           
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
