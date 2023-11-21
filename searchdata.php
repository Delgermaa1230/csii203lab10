<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>

<?php
// index.php - Display data from the database

// Include the database connection code
include('db_connect.php');

// SQL query to retrieve data from the 'users' table
$sql = "SELECT stuffName, StuffBdate, stuffprice FROM stuffs";
$result = $conn->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["stuffName"]. " - Name: " . $row["StuffBdate"]. " - buying date: " . $row["stuffprice"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>

</body>
</html>