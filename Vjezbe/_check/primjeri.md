1. Koje su dvije najčeće web forme koje se koriste za slanje podataka iz web forme na server, navedite ih i objasnite razliku

Dvije najčešće web forme koje se koriste za slanje podataka iz web forme na server su GET i POST metode.
Obje metode su dio HTML form elementa, ali se razlikuju u načinu na koji šalju podatke i u njihovim prednostima i nedostacima.

GET metoda šalje podatke putem URL-a što znači da su podaci uključeni u URL adresu kada se forma pošalje te
stoga nije sigurana za slanje osjetljivih podataka (kao što su lozinke i brojevi kreditnih kartica),
postoji ograničenje u veličini podataka koji se mogu poslati, jer URL ima ograničenje duljine (obično oko 2000 znakova).

POST metoda šalje podatke unutar tijela HTTP zahtjeva, znači da podaci nisu vidljivi u URL-u, već su u tijelu zahtjeva,
što čini POST sigurnijim za slanje osjetljivih informacija (ali podaci još uvijek mogu biti uhvaćeni ako se ne koristi HTTPS),
pritom nema značajnijih ograničenja u veliniči podataka koji se mogu poslati (osim onih postavljenih od strane servera).
 
2. Koja je svrha $fillable svojstva u Laravel modelu?

U Laravelu, $fillable i $guarded su dva svojstva koja služe za zaštitu modela od napada poznatog kao masovni unos (mass assignment). 
Ova svojstva omogućuju kontrolu nad tim koji atributi modela mogu biti masovno dodani ili ažurirani, čime se povećava sigurnost aplikacije.

Svojstvo $fillable omogućava developeru da eksplicitno navede koja polja (atributi) modela mogu biti masovno postavljena (npr. putem metode create() ili update()). 
Svojstvo $guarded je suprotno od $fillable. Umjesto da se navode dopuštena polja, $guarded definira koja polja ne smiju biti masovno postavljena.
 
3. može li se u istoj php datoteci definirati više imenskih prostora?

može
 
4. Svrha funkcije spl_autoload_register u PHP-u?

`Registrirati funkciju koja se automatski poziva kada je klasa nedefinirana.`
 
5. što je objekt u php-u?

tip podataka
 
6. Opišite na koji biste način proveli završno testiranje projekta

npr. Laravel projekt

1. definiramo ciljeve testiranja - definiramo što želimo postići testiranjem i testne slučajeve
2. definiramo testiranja - funkcionalno pomoću npr. Laravel Dusk, sigurnosno da provjerimo ranjivosti aplikacije, testiranje performansi na većim opterećenjima... itd.
2. automatiziramo testiranje sa npr. PHPUnit u Laravelu
4. zatim beta testing s krajnjim korisnicima tzv. (UAT) User Acceptance Testing
5. rješavanje bugova i problema te novo testiranje
6. kada je sve spremno puštanje u produkciju


 
7. Ograničenje foreign key osigurava referentni integritet između dvije tablice?

točno
 
8. Koji zapis kardinalnosti znači jedan i samo jedan?

1:1
 
9. Naredba za novog usera u SQL bazi

CREATE USER 'novi_korisnik'@'localhost' IDENTIFIED BY 'lozinka';

10. Koja metoda se koristi za dohvaćanje jednog zapisa iz tablice prema primarnom ključu?

$user = DB::table('users')->find(1);
 
11. kako se briše kolačić u php

// postavljanje (sa trajanjem 1 sat)
setcookie("user", "JohnDoe", time() + 3600, "/");

// brisanje (ista naredba uz postavljanje vremena isteka u prošlost)
setcookie("user", "", time() - 3600, "/");

12. Koja je ispravna sintaksa za pokretanje php skripte?

<?php ?>
 
13. Koja je svrha kontrole verzija u razvoju softvera?

Praćenje promjena koda tijekom vremena - Programeri mogu lako vidjeti tko je napravio koju promjenu, kada je promjena napravljena i s kojim ciljem, čime se olakšava pregled povijesti projekta.
Dijeljenje koda s drugima - Omogućava svim članovima tima pristup najnovijoj verziji koda u svakom trenutku, što osigurava usklađenost i ažurnost projekta.
Suradnja na kodu - Više programera može istovremeno raditi na istom projektu, kombinirajući svoje promjene na siguran način, bez gubitka podataka ili međusobnih konflikata u kodu.

pratiti promjene koda tijekom vremena;
dijeljenje koda s drugima;
suradnja na kodu s drugima;
* sve navedeno;



14. Koji je od ovoga točno: Kako pristupate svojstvima objekta u PHP-u? 

Korištenje "." operator nakon kojeg slijedi naziv svojstva nakon kojeg slijedi naziN svojstva. Upotrebom operatora 
Korištenje ";" operator nakon kojeg slijedi naziv svojstva 
* Korištenje operatora "->" iza kojeg slijedi naziv svojstva

15. Koji su po vama obavezni koraci koje biste uvrstili u CI - continous integration pipeline

Dohvat koda iz glavne grane repozitorija i instalaciju zavisnosti (npr. composer install, npm install).
Build aplikacije kako bi se provjerile potencijalne greške (npr. cache konfiguracija).
Pokretanje testova (jediničnih, integracijskih i sl.) radi osiguranja ispravnosti koda.
Statička analiza i linting za otkrivanje sintaktičkih i logičkih pogrešaka.
Sigurnosno skeniranje za prepoznavanje ranjivosti.
Generiranje izvještaja o greškama i prekid procesa ako neki korak ne uspije.
Opcionalno, proces može uključivati E2E testove, deployment na testno okruženje i manualnu odobrenje za produkciju (u slučaju CI/CD-a).

16. Što je od sljedećeg ispravna sintaksa za povezivanje s MySQL bazom podataka koristeći mysqli u PHP-u? 

$conn = mysqli_connect("localhost", "user", "password", "database");

17. Što od sljedeceg nije nacin za prosljedivanje podataka prikazu u Laravelu? 

* Funkcijom request()
Metodom with()
Funkcijom compact()
S nizom (array) podataka

18. Koja je svrha sintakse {{ }} u Blade predlošcima?

Uključiti podpredložak
Za definiranje novog odjeljka u predlošku
Za definiranje uvjetne izjave
* Za ispis vrijednosti varijiable.

19. Za što se koristi Laravel Migrations?

Za upravljanje konfiguracijskim datotekama aplikacije.
Za upravljanje pohranom datoteka.
* Za upravljanje promjenama sheme baze podataka.
Za upravljanje postavljanjem poslužitelja.

20. Koja se naredba koristi za provjeru verzije PHP-a instalirane na sustavu? 

php --version 
php -i 
php -V 
* sve navedeno



21. Koja je svrha PHP funkcije "spl_autoload_register"? 

Registrirati funkciju koja se poziva kada je obiekt uništen. 
Registrirati funkciju koja se poziva kada se učita skripta. 
* Registrirati funkciju koja se automatski poziva kada ie klasa nedefinirana. 
Registrirati funkciju koia se poziva kada se pojavi greška

22. Koraci za dodavanje baze podataka na web hosting:

-Prijava se u hosting panel (cPanel, Plesk, itd.).
-Kreiramo bazu podataka npr. Pod "Databases" kreiramo bazu, korisnika, i dodijelimo mu privilegije.
-Uvezemo bazu: U phpMyAdmin-u odaberemo bazu i uvezemo .sql datoteku putem "Import" opcije.
-Ažuriramo vezu na bazu u postavkama aplikacije (tj u kodu gdje imamo podatke za spajanje)
-Testirano da li veza radi.

23. Kako petlje ubrzavaju procese?

programske petlje su strukture koje omogućavaju da se dijelovi programa/koda izvrše, odnosno iteriraju više puta (zadani broj ili sve dok je određeni uvjet ispunjen)
te na taj način ubrzavaju/automatiziraju obradu podataka (izbjegavamo repetitivno ponavljanje koda), 
posebno su korisne kada treba obaviti akciju nad nizom elemenata (primjerice prilikom pretraživanja lista, polja i slično).

24. Šta od navedenog nije vrsta podataka?

Objekt
Array
* Funkcija

ZADACI

1. metoda za pripremu sql upita u pdo?

<?php
$host = 'localhost';
$db = 'moja_baza';
$user = 'korisnik';
$pass = 'lozinka';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
// Primjer pripremljenog upita za unos podataka
$sql = "INSERT INTO korisnici (ime, prezime, email) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$ime = "Pero";
$prezime = "Perić";
$email = "pero.peric@example.com";

$stmt->execute([$ime, $prezime, $email]);

// Dohvaćanje ID-a zadnje unesenog reda
$id = $pdo->lastInsertId();

echo "Unesen novi korisnik s ID-jem: " . $id . "\n";

// Primjer pripremljenog upita za dohvaćanje podataka
$sql = "SELECT * FROM korisnici WHERE id = ?";
$stmt = $pdo->prepare($sql);
$id = 1;

$stmt->execute([$id]);
$korisnik = $stmt->fetch();

if ($korisnik) {
    echo "Ime: " . $korisnik['ime'] . "\n";
    echo "Prezime: " . $korisnik['prezime'] . "\n";
    echo "Email: " . $korisnik['email'] . "\n";
} else {
    echo "Korisnik s ID-jem " . $id . " nije pronađen.\n";
}

2. SQL transakcija
-- Kreirajte transakciju koja ce umetnuti novo placanje za kupca sa sifrom 145.
START TRANSACTION;

INSERT INTO payments 
VALUES(145, 'ABC123', CURRENT_DATE, 1000);

COMMIT;

3. Napisi ovaj kod u objektno orijentitanom pristupu sa PHPom: 
<?php 
// Proceduralni pristup 
$brojl = 5;
$broj2 = 3; 
function zbroji($a, $b) {
return $a + $b;
}
$rezultat = zbroji($brojl, $broj2); 
echo "Zbroj je: " . $rezultat;
__________________________________

<?php

class Zbrajanje {
    private $broj1;
    private $broj2;
    public function __construct($broj1, $broj2) {
        $this->broj1 = $broj1;
        $this->broj2 = $broj2;
    }
    public function zbroji() {
        return $this->broj1 + $this->broj2;
    }
    public function ispisiRezultat() {
        $rezultat = $this->zbroji();
        echo "Zbroj je: " . $rezultat;
    }
}

$zbrajanje = new Zbrajanje(5, 3);
$zbrajanje->ispisiRezultat();
