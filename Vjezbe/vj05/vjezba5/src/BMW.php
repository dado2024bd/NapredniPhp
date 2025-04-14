<?php

namespace Vehicles;

use Geometry\CircleConstants;

class BMW {
    private $model;
    private $year;
    private $fuelConsumption; // L/100km
    private $fuelCapacity; // Litara
    private $ukljuceno = false; // Status paljenja

    public function __construct($model, $year, $fuelConsumption, $fuelCapacity) {
        $this->model = $model;
        $this->year = $year;
        $this->fuelConsumption = $fuelConsumption;
        $this->fuelCapacity = $fuelCapacity;
    }

    public function diameter() {
        return 2 * CircleConstants::PI * ($this->fuelCapacity / 100);
    }

    public function circumference() {
        return 2 * CircleConstants::PI * ($this->fuelCapacity / 100);
    }

    public function area() {
        return CircleConstants::PI * (($this->fuelCapacity / 100) ** 2);
    }

    public function paljenje() {
        if (!$this->ukljuceno) {
            $this->ukljuceno = true;
            echo "BMW " . $this->model . " je upaljen.<br />";
        } else {
            echo "BMW " . $this->model . " je već upaljen.<br />";
        }
    }

    public function gasenje() {
        if ($this->ukljuceno) {
            $this->ukljuceno = false;
            echo "BMW " . $this->model . " je ugašen.<br />";
        } else {
            echo "BMW " . $this->model . " je već ugašen.<br />";
        }
    }
}

?>
