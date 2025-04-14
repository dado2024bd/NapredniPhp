<?php

use App\Math\Circle as C;

require './app/Math/Constants.php';
require './app/Math/Circle.php';

$circle = new C(10);

echo $circle->getArea(), "\n";