<?php

abstract class Car implements Machine
{
    abstract public function getMilage(): int;

    public function turnOn(): void
    {
        echo ' Brm, brm ', "\n";

    }
    public function turnOff(): void
    {
        echo ' Turning off engine ', "\n";

    }

}