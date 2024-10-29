<?php
$host = 'localhost'; // Usually stays as localhost
$user = 'root'; // Default username for XAMPP
$password = ''; // Default password for XAMPP is blank
$dbname = 'laundry_db'; // Your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
