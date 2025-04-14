<?php

// Uključivanje klasa
require_once 'src/Circle.php';
require_once 'src/CircleConstants.php';

// Instanciranje klase Circle bez korištenja "use" izraza
$circle1 = new \Geometry\Circle(5);
echo "Krug 1: <br />";
echo "Promjer: " . $circle1->diameter() . "<br />";
echo "Opseg: " . $circle1->circumference() . "<br />";
echo "Površina: " . $circle1->area() . "<br /><br />";

// Instanciranje klase Circle koristeći "use" izraz
use Geometry\Circle;

$circle2 = new Circle(10);
echo "Krug 2: <br />";
echo "Promjer: " . $circle2->diameter() . "<br />";
echo "Opseg: " . $circle2->circumference() . "<br />";
echo "Površina: " . $circle2->area() . "<br /><br />";

// Instanciranje klase Circle koristeći "use" izraz s aliasom
use Geometry\Circle as MyCircle;

$circle3 = new MyCircle(15);
echo "Krug 3: <br />";
echo "Promjer: " . $circle3->diameter() . "<br />";
echo "Opseg: " . $circle3->circumference() . "<br />";
echo "Površina: " . $circle3->area() . "<br />";
