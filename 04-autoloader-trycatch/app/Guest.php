<?php

namespace App;

class Guest extends Person
{
    protected function getRole():string
    {
        return 'gost';
    }
}