<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/15
 **/

namespace Patory\Universal;

class Channel
{
    public string $id;
    public ?string $name;
    public ChannelType $type;
    public ?string $parent_id;
}
 