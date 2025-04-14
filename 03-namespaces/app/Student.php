<?php

class Student extends Person
{

    protected function getRole() :string
    {
        return 'student';
    }
}