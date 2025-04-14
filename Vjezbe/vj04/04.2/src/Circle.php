<?php

namespace Geometry;

class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function diameter() {
        return 2 * $this->radius;
    }

    public function circumference() {
        return 2 * \Geometry\CircleConstants::PI * $this->radius; // Koristi konstantu iz CircleConstants
    }

    public function area() {
        return \Geometry\CircleConstants::PI * ($this->radius ** 2); // Koristi konstantu iz CircleConstants
    }
}
