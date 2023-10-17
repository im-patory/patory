<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/15
 **/
 
namespace Patory\Universal;

class Login
{
    public User $user;
    public ?string $self_id;
    public ?string $platform;
    public Status $status;
}
 