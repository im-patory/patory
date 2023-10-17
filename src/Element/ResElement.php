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
use Patory\Universal\ElementAttrScope;

class ResElement extends RootElement
{
    const _hidden = true;
    const type = 'res';
    const fieldAttrs = ['src', 'cache' => [
            'type' => 'bool',
            'scope' => ElementAttrScope::SEND
        ],
        'timeout' => [
            'scope' => ElementAttrScope::SEND
        ]
    ];
}
