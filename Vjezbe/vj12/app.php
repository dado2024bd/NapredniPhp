<?php

$config = require('./config/database.php');

try {
    $connection = new PDO(
        "mysql:dbname={$config['database']}",
        $config['username'],
        $config['password']
    );


} catch (PDOException) {
    die('Could not connect to database!');
}

try {
    $connection->beginTransaction();
    $orderNumber = $connection->query('SELECT MAX(orderNumber) AS max FROM orders')->fetchColumn();
    $orderNumber++;
    $preparedStatement = $connection->prepare(
        'INSERT INTO `orders` (orderNumber, `orderDate`, `requiredDate`, `status`, 
        `customerNumber`)
         VALUES (:orderNumber, :orderDate, :requiredDate, :status, :customerNumber)'
    );


    $preparedStatement->bindValue(':orderNumber', $orderNumber);
    $preparedStatement->bindValue(':orderDate', date('Y-m-d'));
    $preparedStatement->bindValue(':requiredDate', date('Y-m-d'));
    $preparedStatement->bindValue(':status', 'Shipped');
    $preparedStatement->bindValue(':customerNumber', 119);
    $preparedStatement->execute();

    $preparedStatement = $connection->prepare(
        'INSERT INTO `orderdetails` (`orderNumber`, `productCode`, `quantityOrdered`, 
        `priceEach`, `orderLineNumber`) VALUES (:orderNumber, :productCode, :quantity, :price, 
        :orderLine)');
    
    $preparedStatement->bindValue(':orderNumber', $orderNumber);
    $preparedStatement->bindValue(':productCode', 'S18_1749');
    $preparedStatement->bindValue(':quantity', 20);
    $preparedStatement->bindValue(':price', 50);
    $preparedStatement->bindValue(':orderLine', 3);
    $preparedStatement->execute();

    $connection->commit();

} catch (PDOException $e) {
    $connection->rollback();
    die("Failed executing queryies: {$e->getMessage()}");
}