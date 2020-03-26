<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>List of PC's with selected CPU</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

</head>
<body>
    <?php
    include '../connection.php'; 

    $data = $_POST['pcbycpu'];
    //print_r($_POST);

    $statement = $connection->prepare('SELECT netname FROM computer WHERE FID_Processor = :data');
    $statement->execute(array(':data'=> $data[0]));
    $result =$statement->fetchAll();

    //print_r($result);

    echo "<table>";
    echo "<tr><th>Netname of PC's with selected CPU</th></tr>";
    foreach($result as $item_row) {
        $item = $item_row[0];
        echo "<tr><td>$item</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>