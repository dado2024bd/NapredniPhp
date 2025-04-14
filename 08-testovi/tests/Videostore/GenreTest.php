<?php

namespace App\Tests\Videostore;

use App\Videostore\Genre;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Genre::class)]
class GenreTest extends TestCase
{
    public function testGetNameReturnsInExpectedFormat()
    {
        $genre = new Genre(100, 'Testni zanr');

        $this->assertIsString($genre->getName());
        $this->assertSame('[ID:100] Testni zanr', $genre->getName());
    }
}