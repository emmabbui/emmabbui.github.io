<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST['searchTerm'];

   // Displays the search results
    $sql = "SELECT * FROM item WHERE name LIKE '%$searchTerm%' OR description LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

}