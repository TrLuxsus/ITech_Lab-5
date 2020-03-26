<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>List of PC's with selected software</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

</head>
<body>
    <?php
    include '../connection.php'; 
    $soft = $_POST['pcbysoftware'];
    //print_r($_POST);
    //print_r($soft);
    //echo "$soft[0]";
    // $statement = $connection->prepare("SELECT netname FROM computer WHERE ID_Computer = (SELECT FID_Computer FROM computer_software WHERE FID_Software = :soft)");
    $statement = $connection->prepare("SELECT netname FROM computer, computer_software WHERE FID_Software = :soft AND FID_Computer=ID_Computer");
    $statement->execute(array(':soft' => $soft));
    $result =$statement->fetchAll();

    //print_r($result);
    echo "<table>";
    echo "<tr><th>Netname of PC with selected software</th></tr>";
    foreach($result as $item_row) {
        $item = $item_row[0];
        echo "<tr><td>$item</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>