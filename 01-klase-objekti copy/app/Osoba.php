<?php

class Osoba{
    protected string $ime;
    protected string $prezime;

    public function setIme(string $ime)
    {
        $this->ime = ucfirst($ime);
    }
    public function setPrezime(string $prezime)
    {
        $this->prezime = ucfirst($prezime);
    }

}