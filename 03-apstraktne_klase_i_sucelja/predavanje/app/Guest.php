<?php

class Guest extends Person
{
    protected function getRole():string
    {
        return 'gost';
    }
}