<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/16
 **/

namespace Patory\Events;

class Message extends Basic
{
    const _root = 'message';
    const created = [
        'name' => 'created',
        'field' => ['channel', 'message', 'user']
    ];

    const updated = [
        'name' => 'updated',
        'field' => ['channel', 'message', 'user']
    ];

    const deleted = [
        'name' => 'deleted',
        'field' => ['channel', 'message', 'user']
    ];
}
