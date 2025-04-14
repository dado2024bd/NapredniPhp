<?php

$config = require('./config/database.php');

$connection = new mysqli(username: $config['username'], password: $config['password'], 
database: $config['database']);
$connection->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, true);

$result = $connection->query('SELECT * FROM zanrovi');
//mysqli_result

foreach($result as $row){
    echo $row['ime'], "\n";
}
    