<?php

// Kreiranje objekta automobila
$auto = new Automobil('123456789ABC', 'Model X', 'Tesla');

// Metoda za Ispis informacija o automobilu
$auto->prikaziInfo();

// Kada skripta završi ili se objekt uništi, destruktor će se automatski pozvati


/*
1. Konstruktor (__construct) prima tri parametra: broj šasije, model i proizvođača, te ih sprema u privatne atribute objekta.
2. Destruktor (__destruct) automatski se poziva kad se objekt uništi (na primjer, kad završi skripta), te ispisuje poruku da se automobil odvozi na reciklažu.
3. prikaziInfo() funkcija je opcionalna i služi za prikazivanje informacija o automobilu.

Kad se objekt "automobil" uništi (npr. kada završi skripta), PHP automatski poziva destruktor i ispisuje poruku.
*/
/*
Objašnjenje Koda
1. Atributi Klase
$brojSasije: Unikatni identifikator automobila.
$model: Model automobila.
$proizvodjac: Proizvođač automobila.
2. Konstruktor
Konstruktor (__construct) se koristi za inicijalizaciju objekta s potrebnim atributima prilikom instanciranja.
3. Metoda za Ispis Informacija
ispisInformacija metoda ispisuje osnovne informacije o automobilu.
4. Destruktor
Destruktor (__destruct) se automatski poziva kada se objekt uništava ili kada skripta završava, ispisujući poruku o reciklaži.
Kako Koristiti Klase
Možeš kreirati nove instance klase Automobil i koristiti metodu ispisInformacija da dobiješ informacije o automobilu. Kada završiš s objektom ili kada skripta završi, destruktor će se automatski pozvati.
*/