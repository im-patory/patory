<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/16
 **/
namespace Patory\Events;

class GuildRole extends Basic
{
    const _root = 'guild-role';
    const created = [
        'name' => 'created',
        'field' => ['guild', 'role']
    ];

    const updated = [
        'name' => 'updated',
        'field' => ['guild', 'role']
    ];

    const deleted = [
        'name' => 'deleted',
        'field' => ['guild', 'role']
    ];
}
