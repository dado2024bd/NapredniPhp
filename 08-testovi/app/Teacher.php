<?php

namespace App;

class Teacher extends Person
{
    protected function getRole(): string
    {
        return 'nastavnik';
    }
}