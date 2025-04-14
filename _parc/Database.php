// Autoloader za automatsko učitavanje svih klasa

<?php

class Database {
    private static $instance = null;
    private $connection;

    private function __construct($host, $dbname, $username, $password) {
        $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance($host, $dbname, $username, $password) {
        if (self::$instance === null) {
            self::$instance = new Database($host, $dbname, $username, $password);
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}

?>