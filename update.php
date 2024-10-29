<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $service = $_POST['service'];

        $sql = "UPDATE laundry SET name='$name', service='$service' WHERE id=$id";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $sql = "SELECT * FROM laundry WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
} else {
    die("ID not provided.");
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Laundry Service</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h2 { color: #333; }
        form { max-width: 400px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        input[type="text"] { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; }
        input[type="submit"] { background-color: #4CAF50; color: white; border: none; border-radius: 5px; padding: 10px; cursor: pointer; }
        input[type="submit"]:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <h2>Update Laundry Service</h2>
    <form method="POST">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        Service: <input type="text" name="service" value="<?php echo $row['service']; ?>" required><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
