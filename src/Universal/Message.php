<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/15
 **/

namespace Patory\Universal;

class Message
{
    public string $id;
    public string $content;
    public ?Channel $channel;
    public ?Guild $guild;
    public ?GuildMember $member;
    public ?User $user;
    public int $created_at;
    public int $updated_at;
}
