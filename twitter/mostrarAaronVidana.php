<?php
require_once('database_connection.php');
require_once('class.twitterData.php');

$objDatos = new TwitterData($connect, 4);
$Information1 = $objDatos -> getInformation1();
$Information2 = $objDatos -> getInformation2();
$Information3 = $objDatos -> getInformation3();
$type =  $objDatos -> getPhoto();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Data</title>
</head>
<body>
    <h1>Twitter Data</h1>
    <table>
        <tr>
          
            <th>Information 1</th>
            <th>Information 2</th>
            <th>Information 3</th>
            <th>Photo</th>
        </tr>
        <tr>
            <td><?php echo $Information1; ?></td>
            <td><?php echo $Information2; ?></td>
            <td><?php echo $Information3; ?></td>
            <td><?php echo $type; ?></td>
        </tr>
    </table>
</body>
</html>
