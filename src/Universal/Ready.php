<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/16
 **/
namespace Patory\Universal;

use Patory\Events\Login;

class Ready
{
    /**
     * @var Login[]
     */
    public array $logins;
}