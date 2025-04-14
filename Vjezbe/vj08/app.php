<?php

use App\Circle;
use App\Square;
use App\Triangle;
use App\Notebook;

require './vendor/autoload.php';

$notebook = new Notebook([new Circle(), new Square(), new Triangle()]);

foreach($notebook as $shape) {
    var_dump($shape);
}