<?php

class Computer implements Machine
{
    public function turnOn(): void
    {
        echo "Windows sound turning on <br>";
    }

    public function turnOff(): void
    { 
        echo "Windows sound turning off <br>";
    }

}