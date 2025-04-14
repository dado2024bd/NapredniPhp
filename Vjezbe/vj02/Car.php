<?php
class Car {
    //private string $VIN;
    //private string $model;
    //private string $proizvodac;
    //PROPERTY PROMOTION - deklaracija svojstava u konstruktoru!

    public function __construct(private string $VIN, private string $model, private string $manufacturer)
    {}
    public function __destruct()
    {
        echo "Odvodim automobil marke $this->manufacturer i modela $this->model (Broj sasije $this->VIN) na reciklazu!", "\n";
    }
}