<?php

class Student extends Person
{

    public function sayHello(): string
    {
        return 'Pozdrav, ja sam polaznik ove grupe. Moje ime je ' . 
        $this->name . ' ' . $this->surname;
    }
}