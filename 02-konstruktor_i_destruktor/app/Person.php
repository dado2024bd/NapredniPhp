<?php

class Person
{

    public function __construct(protected string $name, protected string $surname)
    {}
    public function __destruct()
    {
        echo "Unistavamo osobu!", "\n";
    }


    public function getFullName(): string
    {
        return $this->name . ' ' . $this->surname;
    }
}