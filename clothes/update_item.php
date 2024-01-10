<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = $_POST['item_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $condition = $_POST['condition'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $sql = "UPDATE item SET name = '$name', description = '$description', condition = '$condition', category = '$category', price = '$price' WHERE item_id = '$item_id'";
    $conn->query($sql);
    header("Location: index.php");
}