<?php

// Autoload funkcija
spl_autoload_register(function ($class_name) {
    $file = __DIR__ . '/src/' . $class_name . '.php';
    
    if (file_exists($file)) {
        require_once($file);
    } else {
        throw new Exception("Unable to load class: {$class_name}");
    }
});

// Korištenje Singleton patterna
try {
    // Prvi poziv getInstance() će stvoriti instancu
    $singleton1 = Singleton::getInstance();
    $singleton1->doSomething();

    // Drugi poziv getInstance() će vratiti istu instancu
    $singleton2 = Singleton::getInstance();
    
    // Provjera da li su obje instance iste
    if ($singleton1 === $singleton2) {
        echo "Obje varijable referiraju istu instancu.<br />";
    }

} catch (Exception $e) {
    echo "Greška: " . $e->getMessage() . "<br />";
}


