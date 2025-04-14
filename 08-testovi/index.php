<?php

use App\Videostore\Genre;

require './vendor/autoload.php';

$config = require('./config/database.php');

$connection = new PDO(
    "mysql:dbname={$config['database']};host=localhost",
    $config['username'], 
    $config['password'],
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);

$connection->beginTransaction();

$statement = $connection->prepare(
    "INSERT INTO zanrovi (naziv) VALUES (:naziv)"
);
$statement->bindParam(':naziv', 'Komedija');
$statement->execute();

$connection->commit();

$result = $connection->query('SELECT * FROM zanrovi');

while ($row = $result->fetchObject(Genre::class)) {
    echo $row->getName(), "\n";
}