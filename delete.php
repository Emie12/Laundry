<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM laundry WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    die("ID not provided.");
}

$conn->close();
header('Location: read.php'); // Redirect back to read.php
exit;
?>
