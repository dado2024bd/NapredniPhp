<?php

use App\Math\Circle;

require './app/Math/Constants.php';
require './app/Math/Circle.php';

$circle = new Circle(10);

echo $circle->getArea(), "\n";