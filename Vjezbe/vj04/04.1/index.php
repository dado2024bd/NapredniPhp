<?php
// Uključivanje klasa
require_once 'MatematičkeKonstante.php';
require_once 'Krug.php';

// Instanciranje bez "use"
$krug1 = new Geometrija\Krug(5);
echo "Krug 1 - Promjer: " . $krug1->promjer() . "\n";
echo "Krug 1 - Opseg: " . $krug1->opseg() . "\n";
echo "Krug 1 - Površina: " . $krug1->povrsina() . "\n";

// Instanciranje s "use"
use Geometrija\Krug as Krug2;
$krug2 = new Krug2(10);
echo "Krug 2 - Promjer: " . $krug2->promjer() . "\n";
echo "Krug 2 - Opseg: " . $krug2->opseg() . "\n";
echo "Krug 2 - Površina: " . $krug2->povrsina() . "\n";

// Instanciranje s aliasom
use Geometrija\Krug;
$krug3 = new Krug(15);
echo "Krug 3 - Promjer: " . $krug3->promjer() . "\n";
echo "Krug 3 - Opseg: " . $krug3->opseg() . "\n";
echo "Krug 3 - Površina: " . $krug3->povrsina() . "\n";