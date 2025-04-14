<?php

class Automobil {
    private $brojSasije;
    private $model;
    private $proizvodjac;

    // Konstruktor - postavlja vrijednosti atributa prilikom instanciranja objekta
    public function __construct($brojSasije, $model, $proizvodjac) {
        $this->brojSasije = $brojSasije;
        $this->model = $model;
        $this->proizvodjac = $proizvodjac;
    }
    
    // Destruktor - ispisuje poruku kada se objekt uništi
    public function __destruct() {
        echo "Automobil s brojem šasije {$this->brojSasije} se odvozi na reciklažu.\n";
    }

    // Metoda - Funkcija za ispis informacija o automobilu (nije nužna, ali može biti korisna)
    public function prikaziInfo() {
        echo "Proizvođač: {$this->proizvodjac}, Model: {$this->model}, Broj šasije: {$this->brojSasije}\n";
    }
}
