<?php
declare(strict_types=1);

/**
 * satori-php
 * Copyright (c) Lipraty 2023.
 *
 * PhpStorm, 2023/10/16
 **/
namespace Patory;

/**
 * Element 渲染函数
 */
class Element
{
    private const _elements = ['text', 'at', 'sharp', 'a', 'img', 'audio', 'video', 'file', 'b', 'strong', 'i', 'em', 'u',
            'ins', 's', 'del', 'spl', 'code', 'sup', 'sub', 'br', 'p', 'message', 'quote', 'author'];
    /**
     *  转义一段文本到消息元素格式。
     */
    public static function escape()
    {
    }
    /**
     * 取消一段文本的消息元素转义。
     */
    public static function unescape()
    {
    }
    /**
     * 解析一段文本内的全部消息元素。其中的纯文本将会解析成 text 类型。
     */
    public static function parse()
    {
    }
    /**
     * 使用选择器在一段文本或消息元素数组中查找。支持的语法包括：
     *
     * - 通配选择器 `*`
     * - 元素选择器 `type`
     * - 选择器列表 `sel1, sel2`
     * - 组合器
     *   - 后代组合器 `sel1 sel2`
     *   - 直接子代组合器 `sel1 > sel2`
     *   - 一般兄弟组合器 `sel1 ~ sel2`
     *   - 紧邻兄弟组合器 `sel1 + sel2`
     *
     * 如果传入了字符串，则会先使用 Element::parse() 进行解析。
     */
    public static function select()
    {
    }
}
