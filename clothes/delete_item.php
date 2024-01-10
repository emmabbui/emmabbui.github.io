<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = $_POST['item_id'];

    $sql = "DELETE FROM item WHERE item_id = '$item_id'";
    $conn->query($sql);
    header("Location: index.php");
}