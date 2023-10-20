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

class AElement extends RootElement
{
    const type = 'a';
    const fieldAttrs = ['href'];
}
