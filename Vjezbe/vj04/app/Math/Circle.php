<?php

namespace App\Math;
class Circle
{
    public function __construct(private int $radius)
    {

    }
    public function getDiametar(): int
    {
        return $this->radius *2;

    }

    public function getArea()
    {
        return $this->radius * $this->radius * Constants::PI;
    }
    public function getCircumference()
    {
        return 2 * $this->radius * Constants::PI;

    }
}