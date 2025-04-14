<?php
// Korištenje Klasa
// Kreiranje objekta BMW
$bmw = new BMW("M3", 2021, 10, 50); // Potrošnja 10 L/100km, kapacitet 50 L

// Ispis informacija o automobilu
$bmw->ispisiInformacije();
$bmw->paljenje();
echo 'Kilometri s punim spremnikom: ' . $bmw->kilometriSPrvimSpremnikom() . ' km<br />';
$bmw->gasenje();

echo "<br />";

// Kreiranje objekta Audi
$audi = new Audi("A4", 2022, 8, 55); // Potrošnja 8 L/100km, kapacitet 55 L

// Ispis informacija o automobilu
$audi->ispisiInformacije();
$audi->paljenje();
echo 'Kilometri s punim spremnikom: ' . $audi->kilometriSPrvimSpremnikom() . ' km<br />';
$audi->gasenje();

echo "<br />";

// Kreiranje objekta Motocikl
$motocikl = new Motocikl("Yamaha", "YZF-R1");

// Ispis informacija o motociklu
$motocikl->ispisiInformacije();
$motocikl->paljenje();
$motocikl->gasenje();

/*
Očekivani Izlaz
Kada pokreneš ovaj kod u PHP-u (npr. u VS Code), očekivani izlaz će biti: 
text
Marka: BMW
Model: M3
Godina proizvodnje: 2021
Potrošnja: 10 L/100km
Kapacitet spremnika: 50 L
BMW M3 je upaljen.
Kilometri s punim spremnikom: 500 km
BMW M3 je ugašen.

Marka: Audi
Model: A4
Godina proizvodnje: 2022
Potrošnja: 8 L/100km
Kapacitet spremnika: 55 L
Audi A4 je upaljen.
Kilometri s punim spremnikom: 687.5 km
Audi A4 je ugašen.

Marka: Yamaha
Model: YZF-R1
Motocikl Yamaha YZF-R1 je upaljen.
Motocikl Yamaha YZF-R1 je ugašen.
Ovaj primjer zadovoljava sve zahtjeve zadatka i pruža potpunu funkcionalnost za rad s automobilima i motociklima. Ako imaš dodatnih pitanja ili trebaš više informacija, slobodno pitaj!
*/