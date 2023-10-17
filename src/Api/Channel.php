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
 
abstract class Channel extends BasicApi
{
    const method = 'channel';
    abstract public function create(string $channel_id, Patory\Universal\Channel $data): Patory\Universal\Channel;
    abstract public function get(string $channel_id): Patory\Universal\Channel;
    abstract public function delete(string $channel_id): void;
    abstract public function update(string $channel_id, Patory\Universal\Channel $data): void;
    abstract public function list(string $channel_id, string $next): Patory\Universal\DataList;
}
