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

abstract class GuildRole extends BasicApi
{
    const method = 'guild.role';
    abstract public function create(string $guild_id, Patory\Universal\GuildRole $role): Patory\Universal\GuildRole;
    abstract public function delete(string $guild_id, string $role_id): void;
    abstract public function update(string $guild_id, string $role_id, Patory\Universal\GuildRole $role): void;
    abstract public function list(string $guild_id, string $next): Patory\Universal\DataList;
}
