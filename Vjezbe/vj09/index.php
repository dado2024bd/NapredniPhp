<?php

$config = require('./config/database.php');

try{
    $connection = new mysqli(username: $config['username'], password: $config['password'], 
    database: $config['database']);
} catch (Exception $th){
    die('Could not connect to database');
}
    echo $connection->host_info;