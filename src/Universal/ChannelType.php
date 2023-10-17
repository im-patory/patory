<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/15
 **/

namespace Patory\Universal;

enum ChannelType: int
{
    case Text = 0;
    case Voice = 1;
    case Category = 2;
    case Direct = 3;
}
