<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/16
 **/
namespace Patory\Api;

use Patory;

abstract class User extends BasicApi
{
    const method = 'user';
    abstract public function get(string $user_id): Patory\Universal\User;
    abstract public function channel_create(string $user_id): Patory\Universal\Channel;
}
