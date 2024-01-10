<?php
$host     = "localhost";
$dbname   = "Webd167";
$username = "root";
$password = "root";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}