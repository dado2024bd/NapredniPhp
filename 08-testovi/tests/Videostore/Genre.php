<?php

namespace App\Videostore;

class Genre
{
    public function __construct(private int $ID, private string $naziv)
    {}

    public function getName()
    {
        return "[ID:$this->ID] $this->naziv";
    }
}