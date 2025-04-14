<?php

class Predavac extends Osoba{
    function __construct(string $ime, string $prezime)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
    }

    public function setImeAndPrezime(string $ime, string $prezime)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
    }

}