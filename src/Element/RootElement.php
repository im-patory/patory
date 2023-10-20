<?php
declare(strict_types=1);

/**
 * patory
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/17
 **/
namespace Patory\Element;

class RootElement
{
    const _hidden = false;
    const type = 'root';
    const fieldAttrs = [];
    public object $attrs;
    /**
     * @var RootElement[]
     */
    public array $children;
    public function __construct(array $children)
    {
        // push element
        $this->children = $children;
    }
}
