<?php
include 'database.php';

$sql = "SELECT * FROM laundry";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Laundry Services</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h2 { color: #333; text-align: center; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; color: #007BFF; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h2>Laundry Services</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Service</th><th>Actions</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['service'] . "</td>
                    <td>
                        <a href='update.php?id=" . $row['id'] . "'>Edit</a> | 
                        <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='text-align:center;'>No records found</p>";
    }
    $conn->close();
    ?>
</body>
</html>
