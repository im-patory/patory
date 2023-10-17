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

abstract class Friend extends BasicApi
{
    const method = 'friend';
    abstract public function list(string $user_id): Patory\Universal\DataList;
    abstract public function approve(string $message_id, bool $approve, ?string $comment): void;
}