// Datoteka za spajanje na bazu

<?php

require 'autoload.php';

$config = new ConfigManager('config.php');
$dbConnection = Database::getInstance(
    $config->get('host'),
    $config->get('dbname'),
    $config->get('username'),
    $config->get('password')
);

$conn = $dbConnection->getConnection();
echo "Uspješno spojeni na bazu podataka!";

?>