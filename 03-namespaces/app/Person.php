<?php

abstract class Person implements Member
{

    public function __construct(protected string $name, protected string $surname)
    {}

    //definiranje postojanja apstraktne funkcije. Naslijeđene f. je moraju implementirati
    abstract protected function getRole():string;

    public function getFullName(): string
    {
        return $this->name . ' ' . $this->surname;
    }

    public function sayHello(): string
    {
        $greeting = 'Pozdrav, moje ime je ' . $this->getFullName();
        $greeting .= '. Ja sam ' . $this->getRole();

        return $greeting;
    }

    public function displayJoinedMessage(): string
    {
        return ucfirst("{$this->getRole()} {$this->getFullName()} se spojio u sobu.");
        //ucfirst('string') je funkcija koja postavlja prvo slovo veliko
    }

}