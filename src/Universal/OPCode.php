<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/15
 **/

namespace Patory\Universal;

enum OPCode: int
{
    case EVENT = 0;
    case PING = 1;
    case PONG = 2;
    case IDENTIFY = 3;
    case READY = 4;
}
