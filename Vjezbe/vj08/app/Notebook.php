<?php

namespace App;

use ArrayIterator;
use IteratorAggregate;
use Traversable;

class Notebook implements IteratorAggregate
{   
    public function __construct(private array $shapes = [])
    {
        
    }

    public function getIterator():Traversable
    {
        return new ArrayIterator($this->shapes);

    } 
}
