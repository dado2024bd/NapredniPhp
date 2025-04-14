<?php

// Autoload funkcija
spl_autoload_register(function ($class_name) {
    // Zamjena namespace separatora s direktorijem
    $file = __DIR__ . '/src/' . str_replace('\\', '/', $class_name) . '.php';
    
    if (file_exists($file)) {
        require_once($file);
    } else {
        throw new Exception("Unable to load class: {$class_name}");
    }
});

// Instanciranje klase Circle bez korištenja “use” izraza
$circle1 = new Geometry\Circle(5);
echo "Krug 1: <br />";
echo "Promjer: " . $circle1->diameter() . "<br />";
echo "Opseg: " . $circle1->circumference() . "<br />";
echo "Površina: " . $circle1->area() . "<br /><br />";

// Instanciranje klase Circle koristeći “use” izraz
use Geometry\Circle;

$circle2 = new Circle(10);
echo "Krug 2: <br />";
echo "Promjer: " . $circle2->diameter() . "<br />";
echo "Opseg: " . $circle2->circumference() . "<br />";
echo "Površina: " . $circle2->area() . "<br /><br />";

// Instanciranje klase Circle koristeći “use” izraz s aliasom
use Geometry\Circle as MyCircle;

$circle3 = new MyCircle(15);
echo "Krug 3: <br />";
echo "Promjer: " . $circle3->diameter() . "<br />";
echo "Opseg: " . $circle3->circumference() . "<br />";
echo "Površina: " . $circle3->area() . "<br />";

// Instanciranje klase BMW bez korištenja “use” izraza
$bmw1 = new \Vehicles\BMW("M3", 2021, 10, 50);
$bmw1->paljenje();
$bmw1->gase();

echo "<br />";

// Instanciranje klase Audi koristeći “use” izraz
use Vehicles\Audi;

$audi1 = new Audi("A4", 2022, 8, 55);
$audi1->paljenje();
$audi1->gase();

echo "<br />";

// Instanciranje klase Motocikl koristeći “use” izraz s aliasom
use Vehicles\Motocikl as Bike;

$motocikl1 = new Bike("Yamaha", "YZF-R1");
$motocikl1->paljenje();
$motocikl1->gase();

?>
