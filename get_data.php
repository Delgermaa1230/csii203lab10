<?php
include 'db_connect.php';

// Fetch data from the database
$sql = "SELECT * FROM stuffs";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the connection
$conn->close();

// Return JSON response
header('Content-Type: application/json');
echo json_encode($data);
?>
