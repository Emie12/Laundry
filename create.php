<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $service = $_POST['service'];

    $sql = "INSERT INTO laundry (name, service) VALUES ('$name', '$service')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Laundry Service</title>
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
    <h2>Add Laundry Service</h2>
    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Service: <input type="text" name="service" required><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>
