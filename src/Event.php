<?php
declare(strict_types=1);

/**
 * patory
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/21
 **/
namespace Patory;

class Event
{
    private $id;
    private $events;
    private $_platform;
    private $_self_id;
    private $timestamp;
    function __construct(int $id, array $events)
    {
        $this->id = $id;
        $this->timestamp = '';
        $this->events = $events;
    }

    function platform(string $platform): static
    {
        $this->_platform = $platform;
        return $this;
    }

    function self_id(string $selfid): static
    {
        $this->_self_id = $selfid;
        return $this;
    }

    /**
     * 构造事件对象
     * @param mixed $resources 该事件所需的资源
     * */
    function construct(mixed $resources)
    {

    }
}

$msg = new Event(123123, Events\Message::created);
$msg->platform('qq')->self_id('115514')->construct([
    'channel'=>[

    ],
    'message'=>[

    ],
    'user'=>[

    ]
]);
