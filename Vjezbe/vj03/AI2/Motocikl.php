<?php

require_once 'Vozilo.php';

class Motocikl implements Vozilo {
    private $marka;
    private $model;
    private $ukljuceno = false; // Status paljenja

    public function __construct($marka, $model) {
        $this->marka = $marka;
        $this->model = $model;
    }

    // Implementacija metode iz Vozilo sučelja
    public function paljenje() {
        if (!$this->ukljuceno) {
            $this->ukljuceno = true;
            echo "Motocikl " . $this->marka . " " . $this->model . " je upaljen.<br />";
        } else {
            echo "Motocikl " . $this->marka . " " . $this->model . " je već upaljen.<br />";
        }
    }

    // Implementacija metode iz Vozilo sučelja
    public function gasenje() {
        if ($this->ukljuceno) {
            $this->ukljuceno = false;
            echo "Motocikl " . $this->marka . " " . $this->model . " je ugašen.<br />";
        } else {
            echo "Motocikl " . $this->marka . " " . $this->model . " je već ugašen.<br />";
        }
    }

    // Metoda za ispis informacija o motociklu
    public function ispisiInformacije() {
        echo "Marka: {$this->marka}<br />Model: {$this->model}<br />";
    }
}

?>
