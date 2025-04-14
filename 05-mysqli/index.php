<?php

require './vendor/autoload.php';

$config = require('./config/database.php');

//$connection = new mysqli(username: $config['username'], password: $config['password'], 
//   database: $config['database']);
//echo $connection->host_info;

$connection = new mysqli(username: $config['username'], password: $config['password'], 
database: $config['database']);
$connection->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, true);

$result = $connection->query('SELECT * FROM zanrovi');
//mysqli_result

while($row = $result->fetch_assoc()){
    var_dump($row);
}
while($row = $result->fetch_object()){
    var_dump($row);
}

// foreach($result as $row){
//     var_dump($row);
// }
    