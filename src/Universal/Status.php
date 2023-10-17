<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/15
 **/
 
namespace Patory\Universal;

enum Status: int
{
    case OFFLINE = 0;
    case ONLINE = 1;
    case CONNECT = 2;
    case DISCONNECT = 3;
    case RECONNECT = 4;
}
