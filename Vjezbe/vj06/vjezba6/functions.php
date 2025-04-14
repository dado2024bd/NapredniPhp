<?php

require_once 'MyCustomException.php';

function checkValue($value) {
    if ($value > 10) {
        throw new MyCustomException("Vrijednost ne smije biti veća od 10.");
    }
    return "Vrijednost je: $value";
}

?>
