<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>List of expired PC's</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    include '../connection.php'; 
    $date = date("Y/m/d");
    $statement = $connection->prepare('SELECT netname FROM computer WHERE guarantee < :date');
    $statement->execute(array(':date'=> $date));
    $result =$statement->fetchAll();
    
    echo "<table>";
    echo "<tr><th>Netname of expired PC</th></tr>";
    //print_r($result);
    foreach($result as $item_row) {
        $item = $item_row[0];
        echo "<tr><td>$item</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>