<?php

class Singleton {
    private static ?Singleton $instance = null;

    // Privatni konstruktor kako bi se spriječilo stvaranje instanci izvan klase
    private function __construct() {
        // Inicijalizacija
    }

    // Staticka metoda za dobivanje instance
    public static function getInstance(): Singleton {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Primjer metode unutar Singleton klase
    public function doSomething() {
        echo "Singleton instance is doing something.<br />";
    }

    // Sprječavanje kloniranja instance
    private function __clone() {}

    // Sprječavanje deserializacije instance
    public function __wakeup() {
        throw new Exception("Cannot unserialize singleton");
    }
}


    //Sadrži privatni statički atribut $instance koji drži jedinu instancu klase.
    //Privatni konstruktor sprječava vanjsko stvaranje instanci.
    //Staticka metoda getInstance() provjerava postoji li već instanca; ako ne, stvara novu.
    //Metoda doSomething() je primjer metode koja može biti pozvana na instanci.
    //  Privatne metode __clone() i __wakeup() sprječavaju kloniranje i deserializaciju instance.