<?php

class Teacher extends Person
{

    public function sayHello(): string
    {
        return 'Pozdrav, ja sam predavac ove grupe. Moje ime je ' . 
        $this->name . ' ' . $this->surname;
    }


}