<?php
// 1. Deklaracija klase koja predstavlja osobu
class Osoba {
    // 2. Public atribut koji će sadržavati ime te osobe
    public $ime;

    // Konstruktor klase za inicijalizaciju imena
    public function __construct($ime) {
        $this->ime = $ime;
    }

    // 3. Metoda koja vraća ime osobe
    public function vratiIme() {
        return $this->ime;
    }
}

// 4. U glavnoj skripti kreirajmo instancu klase i ispišimo ime
$osoba = new Osoba("Ivan"); // Kreiranje instance i dodjeljivanje imena

// Ispis imena putem atributa
echo "Ime osobe (preko atributa): " . $osoba->ime . "<br>";

// Ispis imena putem metode
echo "Ime osobe (preko metode): " . $osoba->vratiIme();

/*
Objašnjenje:

class Osoba: Deklarira klasu Osoba.

$ime: Public atribut klase koji sadrži ime osobe.

__construct(): Konstruktor koji se poziva prilikom kreiranja nove instance klase, gdje se može proslijediti ime.

vratiIme(): Metoda koja vraća vrijednost atributa $ime.

new Osoba("Ivan"): Kreira novu instancu klase Osoba s imenom "Ivan".

echo: Ispisuje ime osobe, prvo direktno iz atributa, a zatim kroz metodu.


Rezultat će biti:

Ime osobe (preko atributa): Ivan
Ime osobe (preko metode): Ivan
*/