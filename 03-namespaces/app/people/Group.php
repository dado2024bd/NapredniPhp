<?php

namespace People;
class Group 
{
    public function __construct(private array $people = [])
    {
    }

    public function getPeopleCount (): int
    {
        return count($this->people);
    }

}