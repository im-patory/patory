<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/16
 **/
namespace Patory\Events;

class GuildMember extends Basic
{
    const _root = 'guild-member';
    const added = [
        'name' => 'added',
        'field' => ['guild', 'member', 'user']
    ];

    const updated = [
        'name' => 'updated',
        'field' => ['guild', 'member', 'user']
    ];

    const removed = [
        'name' => 'removed',
        'field' => ['guild', 'member', 'user']
    ];

    const request = [
        'name' => 'request',
        'field' => ['guild', 'member', 'user']
    ];
}
