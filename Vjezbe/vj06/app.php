<?php

use App\MyException;
require './vendor/autoload.php';

function throwException()
{
    throw new MyException();
}

try{
    throwException();
}catch (MyException){
    //TODO
} finally {
    echo "Finally!", "\n";
}