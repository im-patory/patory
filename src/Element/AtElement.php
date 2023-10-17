<?php
declare(strict_types=1);

/**
 * patory
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/17
 **/
namespace Patory\Element;

use Patory\Element;

class AtElement extends RootElement
{
    const type = 'at';
    const fieldAttrs = ['id', 'name', 'role', 'type'];
}
