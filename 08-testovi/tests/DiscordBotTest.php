<?php

namespace App\Tests;

use App\DiscordBot;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DiscordBot::class)]
class DiscordBotTest extends TestCase
{
    public function testDisplayJoinedMessageReturnsExpectedMessage()
    {
        $bot = new DiscordBot();

        $this->assertIsString($bot->displayJoinedMessage());
        $this->assertSame('I am a DiscordBot!', $bot->displayJoinedMessage());
    }
}