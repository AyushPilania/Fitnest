<?php
$servername = "localhost";
$username = "root"; // your DB username
$password = "";     // your DB password
$dbname = "fitnest";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
