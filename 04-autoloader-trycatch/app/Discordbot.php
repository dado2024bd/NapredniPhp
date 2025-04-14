<?php

namespace App;

use App\Interface\Member;

class Discordbot implements Member
{
    public function displayJoinedMessage(): string
    {
        return 'I am a Discordbot!';
    }

}