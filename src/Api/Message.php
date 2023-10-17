<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/15
 **/
namespace Patory\Api;

use Patory;

abstract class Message extends BasicApi
{
    const method = 'message';
    /**
     * @return Patory\Universal\Message[]
     * */
    abstract public function create(string $channel_id, string $content): array;
    abstract public function get(string $channel_id, string $message_id): Patory\Universal\Message;
    abstract public function delete(string $channel_id, string $message_id): void;
    abstract public function update(string $channel_id, string $message_id, string $content): void;
    abstract public function list(string $channel_id, string $next): Patory\Universal\DataList;
}
