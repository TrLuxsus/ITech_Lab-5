<?php
// echo "gfhgfklhn";
    foreach($connection->query('SELECT ID_Processor, name FROM processor') as $row) {
        //print_r( $row);
        echo '<option value="'. $row['ID_Processor'] .'">'. $row['name'] .'</option>';
    }