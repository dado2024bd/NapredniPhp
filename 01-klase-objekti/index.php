<?php

require './app/Polaznik.php';
require './app/Predavac.php';
require './app/Osoba.php';

$polaznik = new Polaznik('Ivo', 'Ivic');

$polaznik2 = new Polaznik('Marko', 'Maric');

$predavac = new Predavac('Ivan', 'Mandic');

echo $polaznik->sayHello(), "\n";
echo $polaznik2->sayHello(), "\n";
//echo $predavac->sayHello(), "\n";

//var_dump($polaznik, $polaznik2, $predavac);
