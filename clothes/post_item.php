<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seller_id = $_POST['seller_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $condition = $_POST['condition'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $sql = "INSERT INTO item (seller_id, name, description, condition, category, price) VALUES ('$seller_id', '$name', '$description', '$condition', '$category', '$price')";
    $conn->query($sql);
    header("Location: index.php");
}