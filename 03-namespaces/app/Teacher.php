<?php

class Teacher extends Person
{
    protected function getRole() :string
    {
        return 'nastavnik';
    }
}