<?php
declare(strict_types=1);

/**
 * patory
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 10/20/2023
 **/
namespace Patory\Events;

class Basic
{
    const _root = 'basic';

    /**
     * 构造事件对象
     * @param string $name 事件终点名称
     * @param mixed $params 事件资源（object）
     */
    static function construct(string $name, mixed $params): string
    {
        $result = (object)[];
        $self = new \ReflectionClass(__CLASS__);
        $endEvents = $self->getConstants();
        foreach ($endEvents as $key => $val)
        {

        }

        return json_encode($result) | '{}';
    }
}
