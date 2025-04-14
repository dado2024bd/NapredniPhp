
<?php

class Osoba{
    public string $ime;

    public function getIme()
    {
        return $this->ime;
    }
}

$osoba = new Osoba('Petar');
$osoba->ime = 'Petar';

echo $osoba->ime, "\n";
echo $osoba->getIme(),"\n";


