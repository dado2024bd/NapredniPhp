# ZA DODAVANJE NOVIH PROMJENA
git add .
git commit -m "Poruka"
git push

# ZA NOVI REPOZITORIJ
git init
git add .
git commit -m "Poruka"
git branch -M main
git remote add origin https://github.com/VAŠ_USERNAME/radno_okruzenje.git
git push -u origin main

kreitati GitHub token

git config --global credential.helper store
__________________________________

<?php

// Napraviti kalkulator koji koristi 4 osnovne
// matematicke funkcije koristenjem web formi

    const OPERATORS = ['/','*','+','-','%'];

    function calculate($input)
    {
        $num1 = null;
        $num2 = null;

        foreach (OPERATORS as $operator) {
            if (str_contains($input, $operator)) {
                $operands = explode($operator, $input);
                $num1 = $operands[0];
                $num2 = $operands[1];
                break;
            }
        }

        if ($num1 === null) {
            return "Please input a correct mathemalical expression";
        }        

        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "%":
                $result = $num1 % $num2;
                break;
            case "/":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Nije moguće dijeliti s nulom";
                }
                break;
            default:
                $result = "Nepoznata operacija";
        }

        return $result;
    }

?>

<!DOCTYPE html>
<html>
<body>

    <h2>Kalkulator</h2>

    <form method="POST">

        <label for="input">Unesite izraz</label><br>
        <input type="text" id="input" name="input">
        <?php

            if (!empty($_POST['input'])) {
                echo " = " . calculate($_POST['input']);
            }

        ?>
        <br><br>
        <input type="submit" value="Izracunaj">

    </form> 

</body>
</html>

// napravit funkciju koja prima ime,prezime (pErO,pReIc) i kao rezulata vraca P. Preic

function formatName(string $name)
{
    $nameArray = explode(',', $name);

    $name = $nameArray[0];
    $surname = $nameArray[1];
    $surname = ucfirst(mb_strtolower($surname));

    $firstLetter = substr($name, 0, 1);
    $firstLetter = mb_strtoupper($firstLetter);

    return "$firstLetter. $surname";
}

$formattedName = formatName('pErO,pErIć');

echo $formattedName;



function prettyPrint(array $print): void
{
    echo "<pre>";
    print_r($print);
    echo "</pre>";
}
<?php
// napravit web formu za konverziju EUR u USD
// korisink u formu upisuje iznos u eurima i nakon submita
// vi ispisujete konvertiranu vrijdnost

function prettyPrint(array $print): void
{
    echo "<pre>";
    print_r($print);
    echo "</pre>";
}

const URL = 'https://www.hnb.hr/tecajn-eur/htecajn.htm';

$lista = file(URL);

array_shift($lista);

foreach($lista as $valutniRedak){
    if (str_contains($valutniRedak, 'USD')) {
        break;
    }
}

$usdValues = explode('       ', $valutniRedak);

$usdSrednjiTecaj = str_replace(',', '.', $usdValues[2]); // Zamjena decimalne točke

// Konverzija iz EUR u USD
function konvertirajEURuUSD($iznosEUR, $tecajEURUSD) {
    return $iznosEUR * $tecajEURUSD;
}

// Provjera je li poslana forma
if ($_POST) {
    // Provjera je li unesen iznos u EUR
    if (!empty($_POST["eur"]) && is_numeric($_POST["eur"])) {
        $iznosEUR = $_POST["eur"];
        $iznosUSD = konvertirajEURuUSD($iznosEUR, $usdSrednjiTecaj);
        // Formatiranje iznosa u USD s dvije decimale
        $iznosUSDFormatiran = number_format($iznosUSD, 2, '.', '');
        echo "Iznos od $iznosEUR EUR je jednak $iznosUSDFormatiran USD po srednjem tečaju HNB-a.";
    } else {
        echo "Molimo unesite ispravan iznos u EUR.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Konverter valuta</title>
</head>
<body>
    <h2>Konverter valuta EUR u USD</h2>
    <form action="" method="post">
        Unesite iznos u EUR: <input type="text" name="eur"><br><br>
        <input type="submit" value="Konvertiraj">
    </form>
</body>
</html>

<?php

// Kreirajte datoteku obrazac.php i u njoj kreirajte HTML obrazac za upload datoteke. Obrazac treba poslati podatke na obradu datoteci obrada.php.
// Kreirajte datoteku obrada.php i u njoj dohvatite datoteku te učinite sljedeće:
// Provjerite je li datoteka poslana
// Kreirajte novu mapu u koju ćete pohraniti datoteku
// Provjerite je li poslana datoteka slika
// Pohranite poslanu datoteku.

if ($_FILES && isset($_FILES["datoteka"])) {
    // Provjeri je li datoteka poslana
    if ($_FILES["datoteka"]["error"] === UPLOAD_ERR_OK) {
        // Kreiraj novu mapu ako ne postoji
        $direktorij = 'uploads/';
        if (!file_exists($direktorij)) {
            mkdir($direktorij, 0777, true);
        }


        // Provjeri je li poslana datoteka slika
        // exif_imagetype() // -> Stjepan
        $dozvoljeni_formati = array('jpg', 'jpeg', 'png', 'PNG', 'gif', 'webp');
        $datoteka_info = pathinfo($_FILES['datoteka']['name']);
        $format = strtolower($datoteka_info['extension']);

        
        if (in_array($format, $dozvoljeni_formati)) {
            // Pohrani poslanu datoteku
            $nova_datoteka = $direktorij . basename($_FILES['datoteka']['name']);
            if (move_uploaded_file($_FILES['datoteka']['tmp_name'], $nova_datoteka)) {
                echo 'Datoteka uspješno pohranjena.';
            } else {
                echo 'Došlo je do problema prilikom pohrane datoteke.';
            }
        } else {
            echo 'Dozvoljeni formati datoteka su: jpg, jpeg, png, gif';
        }
    } else {
        echo 'Nije poslana datoteka ili je došlo do greške prilikom prijenosa.';
    }
} else {
    echo 'Nije poslan $_FILES niz ili datoteka nije pravilno postavljena.';
}

 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Obrazac za upload datoteke</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        Odaberite datoteku: <input type="file" name="datoteka">
        <input type="submit" value="Pošalji">
    </form>
</body>
</html>



<?php

const FILE_PATH = __DIR__ . "/Podaci/words.json";

$words = [];

if (file_exists(FILE_PATH)) {
    $existingData = file_get_contents(FILE_PATH);
    $words = json_decode($existingData, true);
}

$wordList = $words;

if (!empty($_POST['input'])) {
    $input = $_POST['input'];
    $wordList = wordManipulation($input, $words);
}

function wordManipulation($input, $words)
{
    if (ctype_alpha($input)) {
        $length = strlen($input);
        $vowels = preg_match_all('/[aeiou]/i', $input);
        $consonants = $length - $vowels;

        $word = [
            'word' => $input,
            'length' => $length,
            'vowels' => $vowels,
            'consonants' => $consonants
        ];

        $words[] = $word; 
        $encodedWords = json_encode($words);
        file_put_contents(FILE_PATH, $encodedWords);
    }

    return $words; 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>probni parcijalni</title>
</head>

<body>
    <form method="post">
        <label>Upišite riječ:</label>
        <br>
        <input type="text" name="input">
        <br>
        <br>
        <input type="submit" value="Pošalji">
        <br>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>Riječ</th>
                <th>Broj slova</th>
                <th>Broj suglasnika</th>
                <th>Broj samoglasnika</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($wordList)) : ?>
                <?php foreach ($wordList as $rijec) : ?>
                    <tr>
                        <td><?= $rijec['word']; ?></td>
                        <td><?= $rijec['length']; ?></td>
                        <td><?= $rijec['consonants']; ?></td>
                        <td><?= $rijec['vowels']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4">Niste uspisali nijednu riječ</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
<?php
// 1. Pročitajte podatke iz datoteke polaznici.json, te ih ispišite u HTML tablicu.
// 2. Dodajte novog polaznika u datoteku polaznici.json, te podatke iz nje ponovo ispišite.

$polaznici = file_get_contents(__DIR__ . '/podaci/polaznici.json');
$polazniciArray = json_decode($polaznici, true);

function ispisPolaznika($polazniciArray)
{
?>
    <table border="1px">
        <tr>
            <th> Ime </th>
            <th> Prezime </th>
            <th> Godine </th>
            <th> Email </th>
            <th> Telefon </th>
        </tr>
        <?php foreach ($polazniciArray as $polaznik) : ?>
            <tr>
                <td> <?php echo $polaznik['name']; ?> </td>
                <td> <?php echo $polaznik['surname']; ?> </td>
                <td> <?php echo $polaznik['age']; ?> </td>
                <td> <?php echo $polaznik['email']; ?> </td>
                <td> <?php echo $polaznik['phone']; ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
};
ispisPolaznika($polazniciArray);

$polazniciArray[] = [
    'name' => 'Sanja',
    'surname' => 'Sanjic',
    'age' => 42,
    'email' => 'sanja.sanjic@gmail.com',
    'phone' => '38598123456',
];

$polaznici = json_encode($polazniciArray);
file_put_contents(__DIR__ . '/podaci/polaznici.json', $polaznici, FILE_APPEND);

ispisPolaznika($polazniciArray);

podaci/polaznici.json
[{"name":"Ivan","surname":"Horvat","age":35,"email":"ivan.horvat@gmail.com","phone":38591222333},{"name":"Ana","surname":"Mi\u0161ak","age":25,"email":"ana.misak@gmail.com","phone":38592333444},{"name":"Kristina","surname":"Kristi\u0107","age":31,"email":"kristina.kristic@gmail.com","phone":38598444555},{"name":"Mirko","surname":"Mirkan","age":45,"email":"ivan.horvat@gmail.com","phone":38599555666},{"name":"Sanja","surname":"Sanjic","age":42,"email":"sanja.sanjic@gmail.com","phone":"38598123456"},{"name":"Sanja","surname":"Sanjic","age":42,"email":"sanja.sanjic@gmail.com","phone":"38598123456"},{"name":"Sanja","surname":"Sanjic","age":42,"email":"sanja.sanjic@gmail.com","phone":"38598123456"},{"name":"Sanja","surname":"Sanjic","age":42,"email":"sanja.sanjic@gmail.com","phone":"38598123456"},{"name":"Sanja","surname":"Sanjic","age":42,"email":"sanja.sanjic@gmail.com","phone":"38598123456"}]

podaci/knjige.json
[{"title":"To Kill A Mockingbird","author":"Harper Lee","available":true,"pages":336,"isbn":9780061120084},{"title":"1984","author":"George Orwell","available":true,"pages":267,"isbn":9780547249643},{"title":"One Hundred Years Of Solitude","author":"Gabriel Garcia Marquez","available":false,"pages":457,"isbn":9785267006323},{"title":"Lord of the rings","author":"J.R.R. Tolkien","available":false,"pages":1200,"isbn":2456415364},{"title":"Lord of the rings","author":"J.R.R. Tolkien","available":false,"pages":1200,"isbn":2456415364},{"title":"Lord of the rings","author":"J.R.R. Tolkien","available":false,"pages":1200,"isbn":2456415364}]

read_json.php

<?php

$books = file_get_contents(__DIR__ . '/podaci/knjige.json');

var_dump($books);

$books = json_decode($books, true);

var_dump($books);

write_to_json.php

<?php

const FILE_PATH = __DIR__ . '/podaci/knjige.json';

$books = file_get_contents(FILE_PATH);

$books = json_decode($books, true);

$books[] = [
    "title" => "Lord of the rings",
    "author" => "J.R.R. Tolkien",
    "available" => false,
    "pages" => 1200,
    "isbn" => 2456415364
];

$books = json_encode($books);

file_put_contents(FILE_PATH, $books);
ARRAYS
<?php

$primeNumbers = array(2, 3, 5, 7, 11);

var_dump(isset($primeNumbers[2]));

echo '<br><br>';

echo "Treci caln arraya primeNumbers " . (isset($primeNumbers[2]) ? 'postoji.' : 'ne postoji.');

echo '<br><br>';

$users[] = array(
    'ime' => 'Ivan',
    'prezime' => 'Kovačević',
    'godine' => '35',
);

echo '<pre>';
print_r($users);
echo '</pre>';

$users = [
    [
        'ime' => 'Ivo',
        'prezime' => 'Ivić',
        'godine' => 19,
        'spol' => 'M'
    ],
    [
        'ime' => 'Pero',
        'prezime' => 'Perić',
        'godine' => 29,
        'spol' => 'M'
    ],
    [
        'ime' => 'Marija',
        'prezime' => 'Marijanović',
        'godine' => 30,
        'spol' => 'Ž'
    ],
    [
        'ime' => 'Petra',
        'prezime' => 'Petrić',
        'godine' => 18,
        'spol' => 'Ž'
    ]
];

echo '<pre>';
print_r($users);
echo '</pre>';

// unset($users[0]['spol']);
// unset($users[1]['spol']);

foreach ($users as $key => $user) {
    unset($users[$key]['spol']);
}
echo '<pre>';
print_r($users);
echo '</pre>';
KONTROLNE STRUKTURE
<?php

/* Ova funkcija ispisuje Brake line HTML tag */
function br(int $ponavljanje = 1)
{	echo str_repeat('<br>', $ponavljanje);	}

/* 1. Koristeći petlju
while, ispišite prvih
deset brojeva. */

    $i = 1;
    while ($i <= 10) {
        echo $i . " ";
        $i++;
    }

    br(4);

// 2. Koristeći petlju for, ispišite visekratnike broja 3 do 100.

    for ($i = 3; $i <= 100; $i += 3) {
        echo $i . " ";
    }

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) {
            echo $i . " ";
        }
    }
    br(3);
    
/* 3. Tablica množenja: Napiši PHP program koji koristi petlje za generiranje tablice množenja od 1 do 10.
    Primjer:
        1 x 1 = 1
        2 x 2 = 4
        ...
        10 x 10 = 100 */

    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = " . ($i * $j) . br();
        }
        br();
    }

// 4. Definirajte varijablu $names i dodijelite joj niz koji sadrži pet imena.
//     Koristeći petlju foreach, iz niza ispišite ključeve i pripadajuće im vrijednosti. 

    $names = ["Ana", "Marko", "Ivana", "Petar", "Maja"];
    foreach ($names as $key => $value) {
        echo "$key: $value<br>";
    }

// 6. Ispisati imena iz niza $names spojene sa zarezom i razmakom tako da iza zadnjeg imena ne budu zarez i razmak
//     Primjer:
//         Harry, Ron, Hermione, Snake

    $zadnji_key = count($names) - 1;

    foreach ($names as $key => $name) {
        if ($zadnji_key === $key) {
            echo $name;
        } else {
            echo "$name, ";
        }
    }

    $imena = implode(', ', $names);

// 7. Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.
//     Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.
//     Ako je uvjet istinit, ispišite da je b između a i c, a ako je uvjet lažan ispišite da nije.
//     Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c. 

    $a = 5;
    $b = 10;
    $c = 15;
    if (($b > $a && $b < $c) || ($b < $a && $b > $c)) {
        echo "Vrijednost b je između a i c";
    } else {
        echo "Vrijednost b nije između a i c";
    }

    if ($b < $c && $b > $a) {
        echo 'Broj '. $b .' je između brojeva '. $a .' i '. $c .'.';
    } elseif ($b > $c && $b < $a) {
        echo 'Broj '. $b .' je između brojeva '. $a .' i '. $c .'.';
    } else {
        echo 'Broj '. $b .' nije između brojeva '. $a .' i '. $c .'.';
    }

// 8. Koristeći uvjetovani tip kontrolne strukture switch ili match ispišite koji je trenutno dan u tjednu.
//     Za ispravno izvršenu vježbu koristite PHP funkciju date(). Nazivi dana moraju biti na hrvatskom jeziku.

    $day = match (date('N')) {
        "1" => "Ponedjeljak",
        "2" => "Utorak",
        "3" => "Srijeda",
        "4" => "Četvrtak",
        "5" => "Petak",
        "6" => "Subota",
        "7" => "Nedjelja",
        default => "Dan ne postoji!"
    };
    echo "\t$day";

FUNKCIJE
<?php

// PHP funkcije – vježba 1
// Proizvoljno deklarirajte funkciju koja vraća neki tekst.
// Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
// Ispišite vrijednost varijable.

function returnText() : string 
{
    return "Ovo je vraceni tekst";
}

$text = returnText();
var_dump($text);

echo '<br>';

// PHP funkcije – vježba 2
// Proizvoljno deklarirajte funkciju koja ima dva argumenta (name i surname). Funkcija
// treba konkatenirati podatke iz argumenata tako da između postoji razmak i dodijeliti ih
// lokalnoj varijabli, zatim treba vrijednost u varijabli pretvoriti u velika slova i to vratiti kao
// rezultat.
// Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
// Ispišite vrijednost varijable.

function allCapsNameAndSurname(string $name, string $surname) : string {
    $fullName = "$name $surname";
    return mb_strtoupper($fullName);
}

$ime = allCapsNameAndSurname('žan luk', "pikard");
echo $ime;

echo '<br>';

// PHP funkcije – vježba 3
// Proizvoljno deklarirajte funkciju koja ima jedan argument (number). Funkcija treba imati
// lokalnu varijablu u koju će pribrojiti vrijednost argumenta number te istu vratiti kao
// rezultat. Vrijednost treba biti zadržana kod svakog poziva funkcije.
// Deklarirajte funkciju kao varijablu.
// Pozovite funkciju pomoću varijable, a kao vrijednost argumenta pošaljite slučajan broj u
// rasponu od 1 do 10 te ispišite rezultat.
// Ponovite postupak pet puta.

function pribroji(int $number) : int 
{
    static $a = 0; // radi isto i kad se ostavi $a bez setiranja na 0, valjda pretvori null u 0?
    $a += $number;
    return $a;
}
$fn = 'pribroji';
for ($i = 0; $i < 6; $i++) { 
    $random = rand(1,10);
    if ($i == 0) {
        $sumA = $fn($random);
        echo "Nasumicni broj $random zbrojen s vrijednosti 0 daje $sumA. <br>";//write out first sum
        continue;
    }
    echo "Nasumicni broj $random zbrojen s prethodnim rezultatom $sumA daje ";//write out other sums, first mentioning the previous sumA
    $sumA = $fn($random);//then change sumA to the new value
    echo "$sumA. <br>";//then state what the new sumA is
}

function returnSum(int $num): int
{
    static $sum = 0;
    $sum += $num;
    return $sum;
}

$returnSum = 'returnSum';
$oldSum = 0;

for ($i = 0; $i < 5; $i++) {
    $rand = rand(1, 10);

    echo "oldSum = $oldSum<br>";
    echo "rand = $rand<br>";

    $newSum = $returnSum($rand);
    echo "$oldSum + $rand = $newSum<br>";
    echo "newSum = $newSum<br><br>";
    $oldSum = $newSum;
}

FUNKCIJA KAO VARIJABLA

<?php
function echoIt($string)
{
    echo $string;
}
$func = 'echoIt';
$func('test');  // This calls echoIt()

SESSIONS

session_start();
$_SESSION['user'] = [
    'ime' => 'Aleksandar',
    'adresa' => 5+6
];
var_dump($_SESSION);

COOKIES

var_dump(time());
$expiresIn = time() + 60 * 60;
setcookie('user', 'Aleksandar', $expiresIn, '/');
var_dump($_COOKIE);
setcookie('user', 'kjhkb', time() - 60 * 60, '/');

<?php

// declare(strict_types=1);

class Automobil {
    private string $marka;
    private string $model;
    private string $gorivo;
    private int $masa;
    // getter metoda - vraca vrijednost privatnog svojstva izvan klase
    public function getMarka()
    {
        return $this->marka;
    }
    // setter metoda - slazi za postavljnje vrijednosti privatnog svojstva izvan klase
    public function setMarka(string $marka) // TODO: pokazi i objasni povratni tip
    {
        $this->marka = $marka;
        return $this;
    }
    public function getModel(): string
    {
        return $this->model;
    }
    public function setModel(string $var)
    {
        $this->model = $var;
        return $this;
    }
    
