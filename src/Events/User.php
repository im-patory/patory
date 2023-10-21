<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/16
 **/
namespace Patory\Events;

class User extends Basic
{
    const _root = 'user';
    const friend_request = [
        'root' => true,
        'name' => 'friend-request',
        'field' => ['user']
    ];
}
