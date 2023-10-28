<?php

namespace Patory\Api;

class BasicApi
{
    const resource = 'basic';
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
            'version' => static::version,
            'resource' => static::resource,
            'methods' => $methods
        ];
    }
    /**
     * 生成一个地址，仅供内部函数使用。
     *
     * /{version}/{resource}.{method}
     */
    final static function path(?string $method): string
    {
        if($method == null)
        {
            $trace = debug_backtrace();
            $method = $trace[1]['function'];
        }
        return '/'.static::version.'/'.static::resource.'.'.str_replace('_', '.', $method);
    }

    final static function call(string $func, ...$args)
    {
        return call_user_func($func, ...$args);
    }
}
