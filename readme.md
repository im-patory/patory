<div align="center">

# Satori PHP :: Patory

Satori Protocol implementation.

</div>

## Install

The running environment requires PHP 8.1 and above.

## Feature

- [x] Patory\Api: 请求 API 定义
    - BasicApi
    - (abstract) channel.*
    - (abstract) friend.* (由于架构原因，由 User 中拆出)
    - (abstract) guild.*
    - (abstract) guild.member.*
    - (abstract) guild.role.*
    - (abstract) login.*
    - (abstract) message.*
    - (abstract) user.*
- [x] Patory\Events: API 事件定义
- [x] Patory\Universal: 通用数据定义
- [ ] Patory\Interval: 内部接口转义
- [ ] Patory\Messager: 消息编码
- [ ] Patory\Element: 消息元素工具类
- [ ] Patory\Auth: 简单鉴权工具
- [ ] Patory\Helper: 其他工具

## Patory\Api

所有 API 派生基类都拥有内部魔术方法，以 `Channel` 基类为例：

- `Channel::path('create')`: 生成 URL Path

### Example

```php
// 实现 Channel 基类
class Channel extends Patory\Api\Channel
{
    function create(string $channel_id, Patory\Universal\Channel $data) : Patory\Universal\Channel{
        $url = static::path(__FUNCTION__);
        //输出: /v1/channel.create
    }
}
```

## Patory\Element

元素内部以 Object 形式流转，通过 toString() 转为标准元素 `<foo></foo>`。

```php
// 内部
Element = [
    'type' => 'at',
    'attrs' => [
        'id' => '114514',
        'name' => 'Tadokoro Koji',
        'role' => null,
        'type' => null
    ]
];
```

### APIs

```php
$at = new Patory\Element();
```
