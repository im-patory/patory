<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/15
 **/
 
namespace Patory\Universal;

class User
{
    public string $id;
    public ?string $name;
    public ?string $nick;
    public ?string $avatar;
    public ?bool $is_bot;
}
 
 