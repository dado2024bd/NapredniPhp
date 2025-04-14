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
        return 2 * CircleConstants::PI * $this->radius;
    }

    public function area() {
        return CircleConstants::PI * ($this->radius ** 2);
    }
}

?>
