// Klasa za konekciju na bazu podataka (singleton predložak i PDO)

<?php

class ConfigManager {
    private $config;

    public function __construct($file) {
        $this->config = include($file);
    }

    public function get($key) {
        return $this->config[$key] ?? null;
    }
}

?>