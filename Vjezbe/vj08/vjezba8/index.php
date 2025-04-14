<?php

require_once 'src/Shape.php';
require_once 'src/Circle.php';
require_once 'src/Rectangle.php';
require_once 'src/Notebook.php';

// Kreiranje instance Notebook-a
$notebook = new Notebook();

// Dodavanje geometrijskih oblika
$notebook->addShape(new Circle(5));
$notebook->addShape(new Rectangle(4, 6));

// Iteracija kroz oblike koristeći foreach
foreach ($notebook as $shape) {
    echo "Površina: " . $shape->area() . "<br />";
}

?>

