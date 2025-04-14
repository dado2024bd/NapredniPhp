
<?php

abstract class Automobil {
    protected $marka;
    protected $model;
    protected $godinaProizvodnje;
    protected $potrošnja; // Potrošnja goriva u litrama na 100 km
    protected $kapacitetSpremnika; // Kapacitet spremnika u litrima

    public function __construct($marka, $model, $godinaProizvodnje, $potrošnja, $kapacitetSpremnika) {
        $this->marka = $marka;
        $this->model = $model;
        $this->godinaProizvodnje = $godinaProizvodnje;
        $this->potrošnja = $potrošnja;
        $this->kapacitetSpremnika = $kapacitetSpremnika;
    }
    
    // Apstraktna metoda za broj kilometara s punim spremnikom
    abstract public function kilometriSPrvimSpremnikom();

    // Metoda za ispis informacija o automobilu
    public function ispisiInformacije() {
        echo "Marka: " . $this->marka . "<br />";
        echo "Model: " . $this->model . "<br />";
        echo "Godina proizvodnje: " . $this->godinaProizvodnje . "<br />";
        echo "Potrošnja: " . $this->potrošnja . " L/100km<br />";
        echo "Kapacitet spremnika: " . $this->kapacitetSpremnika . " L<br />";
    }
}

?>