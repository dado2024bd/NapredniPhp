<?php

namespace Vehicles;

class Motocikl {
    private $marka;
    private $model;
    private $ukljuceno = false; // Status paljenja

    public function __construct($marka, $model) {
        $this->marka = $marka;
        $this->model = $model;
    }

    public function paljenje() {
        if (!$this->ukljuceno) {
            $this->ukljuceno = true;
            echo "Motocikl " . $this->marka . " " . $this->model . " je upaljen.<br />";
        } else {
            echo "Motocikl " . $this->marka . " " . $this->model . " je već upaljen.<br />";
        }
    }

    public function gasenje() {
        if ($this->ukljuceno) {
            $this->ukljuceno = false;
            echo "Motocikl " . $this->marka . " " . $this->model . " je ugašen.<br />";
        } else {
            echo "Motocikl " . $this->marka . " " . $this->model . " je već ugašen.<br />";
        }
    }

}

?>
