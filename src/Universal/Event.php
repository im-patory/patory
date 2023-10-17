<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/15
 **/

namespace Patory\Universal;

class Event
{
    public int $id;
    public string $type;
    public string $platform;
    public string $self_id;
    public int $timestamp;
    public ?Channel $channel;
    public ?Guild $guild;
    public ?Login $login;
    public ?GuildMember $member;
    public ?User $operator;
    public ?GuildRole $role;
    public ?User $user;
    public $extra;
}
