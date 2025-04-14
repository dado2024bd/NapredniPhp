<?php

require_once 'BMW.php';
require_once 'Audi.php';
require_once 'Motocikl.php';

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

?>