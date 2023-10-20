<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/16
 **/
namespace Patory\Events;

class Reaction extends Basic
{
    const _root = 'reaction';
    const added = [
        'name' => 'added',
        'field' => []
    ];

    const removed = [
        'name' => 'removed',
        'field' => []
    ];
}
