<?php

require_once 'functions.php';

$value = 15; // Promijenite ovu vrijednost za testiranje

try {
    echo checkValue($value);
} catch (MyCustomException $e) {
    echo "Uhvaćena iznimka: " . $e->getMessage() . "<br />";
} catch (Exception $e) {
    echo "Uhvaćena opća iznimka: " . $e->getMessage() . "<br />";
} finally {
    echo "Ovo se izvršava bez obzira na to je li došlo do iznimke.<br />";
}

?>
