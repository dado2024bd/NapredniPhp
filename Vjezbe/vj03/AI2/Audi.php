<?php

require_once 'Automobil.php';
require_once 'Vozilo.php';

class Audi extends Automobil implements Vozilo {
    private $ukljuceno = false; // Status paljenja

    public function __construct($model, $godinaProizvodnje, $potrošnja, $kapacitetSpremnika) {
        parent::__construct("Audi", $model, $godinaProizvodnje, $potrošnja, $kapacitetSpremnika);
    }

    // Implementacija apstraktne metode
    public function kilometriSPrvimSpremnikom() {
        return ($this->kapacitetSpremnika / $this->potrošnja) * 100; // Vraća kilometre koje auto može proći
    }

    // Implementacija metode iz Vozilo sučelja
    public function paljenje() {
        if (!$this->ukljuceno) {
            $this->ukljuceno = true;
            echo "Audi " . $this->model . " je upaljen.<br />";
        } else {
            echo "Audi " . $this->model . " je već upaljen.<br />";
        }
    }

    // Implementacija metode iz Vozilo sučelja
    public function gasenje() {
        if ($this->ukljuceno) {
            $this->ukljuceno = false;
            echo "Audi " . $this->model . " je ugašen.<br />";
        } else {
            echo "Audi " . $this->model . " je već ugašen.<br />";
        }
    }
}

?>
