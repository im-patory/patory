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


