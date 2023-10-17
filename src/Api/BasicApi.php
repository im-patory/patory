<?php

namespace Patory\Api;

class BasicApi
{
    const method = 'basic';
    const version = 'v1';
    function __serialize(): array
    {
        $methods = [];
        foreach (get_class_methods($this) as $method)
        {
            // Filter function name if starting with `_`
            // _foo : ×
            // foo  : √
            if((substr($method, 1)) == '_')
            {
                continue;
            }
            $methods[] = str_replace('_', '.', $method); // foo_bar => foo.bar
        }

        return [
            'version' => self::version,
            'resource' => self::method,
            'methods' => $methods
        ];
    }
    function __toString(): string
    {
        return '/'.self::version.'/'.self::method;
    }
}
