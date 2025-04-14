<?php

require './app/Math/Constants.php';
require './app/Math/Circle.php';

$circle = new App\Math\Circle(10);

echo $circle->getArea(), "\n";