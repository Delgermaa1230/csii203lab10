<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Data Display</title>
</head>
<body>

<?php

$jsonFile = 'datas.json';

$jsonData = file_get_contents($jsonFile);

$stuffs = json_decode($jsonData, true);


if ($stuffs !== null) {
    
    echo '<p>Id: ' . $stuffs['id'] . '</p>';
    echo '<p>Name: ' . $stuffs['name'] . '</p>';
    echo '<p>Buying Date: ' . $stuffs['bday'] . '</p>';
    echo '<p>Expire date: ' . $stuffs['eday'] . '</p>';
    echo '<p>Purpose: ' . $stuffs['purpose'] . '</p>';

} else {

    echo 'Error decoding JSON data';
}
?>

</body>
</html>