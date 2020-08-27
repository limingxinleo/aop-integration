<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
// | 多语言设置
// +----------------------------------------------------------------------

return [
    // 默认语言
    'default_lang' => env('lang.default_lang', 'zh-cn'),
    // 允许的语言列表
    'allow_lang_list' => [],
    // 多语言自动侦测变量名
    'detect_var' => 'lang',
    // 是否使用Cookie记录
    'use_cookie' => true,
    // 多语言cookie变量
    'cookie_var' => 'think_lang',
    // 扩展语言包
    'extend_list' => [],
    // Accept-Language转义为对应语言包名称
    'accept_language' => [
        'zh-hans-cn' => 'zh-cn',
    ],
    // 是否支持语言分组
    'allow_group' => false,
];
