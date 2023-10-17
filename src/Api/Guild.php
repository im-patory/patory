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

abstract class Guild extends BasicApi
{
    const method = 'guild';
    abstract public function list(string $next): Patory\Universal\DataList;
    abstract public function get(string $guild_id): Patory\Universal\Guild;
    abstract public function approve(string $message_id, bool $approve, string $comment): void;
}
