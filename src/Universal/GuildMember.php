<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/15
 **/

namespace Patory\Universal;

class GuildMember
{
    public ?User $user;
    public ?string $name;
    public ?string $avatar;
    public int $joined_at;
}
