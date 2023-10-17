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

abstract class GuildMember extends BasicApi
{
    const method = 'guild.member';
    abstract public function get(string $guild_id, string $user_id): Patory\Universal\GuildMember;
    abstract public function list(string $guild_id, string $next): Patory\Universal\DataList;
    abstract public function kick(string $guild_id, string $user_id, ?bool $permanent): void;
    abstract public function approve(string $message_id, bool $approve, ?string $comment): void;
    abstract public function role_set(string $guild_id, string $user_id, string $role_id): void;
    abstract public function role_unset(string $guild_id, bool $user_id, string $role_id): void;
}
