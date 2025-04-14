<?php

class Polaznik extends Osoba{
    function __construct(string $ime, string $prezime)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
    }
    public function setName(string $ime)
    {
        $this->ime = $ime;
    }

    public function sayHello()
    {
        return "Hello there!";
    }
}