<?php
require_once(__DIR__ . "/../models/Database.php");

// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insurance";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$res = $conn->query($sql);
$tagData = [];
while ($row = $res->fetch_assoc()) {
    $usersData[] = $row;
}

// Close the connection when done
$conn->close();
?>
