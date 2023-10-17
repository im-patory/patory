<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/16
 **/
namespace Patory\Events;

class Login
{
    const _root = 'login';
    const added = [
        'name' => 'added',
        'field' => ['login']
    ];

    const updated = [
        'name' => 'updated',
        'field' => ['login']
    ];

    const removed = [
        'name' => 'removed',
        'field' => ['login']
    ];
}
