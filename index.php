<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
    include 'php/connection.php'; 
    ?>
    
    <form action='./php/request_data/pcbycpu.php' target="_blank" method="POST">
        PC's by CPU<br>
        <select name='pcbycpu'>
            <?php include 'php/load_data/getcpus.php'; ?>
        </select>
        <input type ='submit' value ='Get'>
    </form>

    <form action='./php/request_data/pcbysoftware.php' target="_blank" method="POST">
        PC's by Software<br>
        <select name='pcbysoftware'>
            <?php include 'php/load_data/getsoftware.php'; ?>
        </select>
        <input type ='submit' value ='Get'>
    </form>

    <form action='./php/request_data/expired.php' target="_blank" method="POST">
        PC's with expired guarantee<br>
        <input type ='submit' value ='Get'>
    </form>
</body>
</html>