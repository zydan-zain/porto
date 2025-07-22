<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_test";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Jangan echo "Connected successfully"; di produksi, karena bisa ganggu header HTTP
?>
