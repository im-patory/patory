<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/16
 **/

namespace Patory\Events;

class Guild extends Basic
{
    const _root = 'guild';
    const added = [
        'name' => 'added',
        'field' => ['guild']
    ];

    const updated = [
        'name' => 'updated',
        'field' => ['guild']
    ];

    const removed = [
        'name' => 'removed',
        'field' => ['guild']
    ];

    const request = [
        'name' => 'request',
        'field' => ['guild']
    ];
}
