<?php
$servername = "localhost";
$username = "root";
$password = "Delgermaa1";
$dbname = "mystuffs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['stuffid'])) {
    $selectedStuffId = intval($_GET['stuffid']); 

    if ($selectedStuffId >= 1 && $selectedStuffId <= 101) {
        $sql = "SELECT * FROM stuffs WHERE stuffid = $selectedStuffId";
        $result = $conn->query($sql);

        $data = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        $conn->close();

        header('Content-Type: application/json');
        echo json_encode($data);
        exit(); 
    } else {
        header('Content-Type: application/json');
        echo json_encode([]);
        exit(); 
    }
}
?>


