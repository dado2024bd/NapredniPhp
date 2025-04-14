<?php
namespace Geometrija;

use MatematičkeKonstante\KrugKonstante;

class Krug {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function promjer() {
        return 2 * $this->radius;
    }

    public function opseg() {
        return 2 * KrugKonstante::PI * $this->radius;
    }

    public function povrsina() {
        return KrugKonstante::PI * ($this->radius ** 2);
    }
}