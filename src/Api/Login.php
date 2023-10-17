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

abstract class Login extends BasicApi
{
    const method = 'login';
    abstract public function get(): Patory\Universal\Login;
}
