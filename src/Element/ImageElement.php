<?php
declare(strict_types=1);

/**
 * patory
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/17
 **/
namespace Patory\Element;

use Patory\Universal\ElementAttrScope;

class ImageElement extends ResElement
{
    const type = 'img';
    const fieldAttrs = ['src', 'cache' => [
            'type' => 'bool',
            'scope' => ElementAttrScope::SEND
        ],
        'timeout' => [
            'scope' => ElementAttrScope::SEND
        ],
        'width' => [
            'type' => 'int',
            'scope' => ElementAttrScope::ACCEPT
        ],
        'height' => [
            'type' => 'int',
            'scope' => ElementAttrScope::ACCEPT
        ]
    ];
}
