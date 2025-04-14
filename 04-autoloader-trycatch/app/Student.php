<?php

namespace App;

class Student extends Person
{

    protected function getRole() :string
    {
        return 'student';
    }
}