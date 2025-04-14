<?php

class Notebook implements Iterator {
    private array $shapes = [];
    private int $position = 0;

    public function addShape(Shape $shape): void {
        $this->shapes[] = $shape;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function current(): Shape {
        return $this->shapes[$this->position];
    }

    public function key(): int {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function valid(): bool {
        return isset($this->shapes[$this->position]);
    }
}

?>
