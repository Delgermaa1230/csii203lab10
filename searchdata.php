<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        h1 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Demi's stuffs</h1>
    <?php

    include('db_connect.php');

    $sql = "SELECT stuffName, StuffBdate, stuffprice FROM stuffs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Buying Date</th>';
        echo '<th>Price</th>';
        echo '</tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["stuffName"] . '</td>';
            echo '<td>' . $row["StuffBdate"] . '</td>';
            echo '<td>' . $row["stuffprice"] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>

</body>

</html>