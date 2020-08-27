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
// | Cookie设置
// +----------------------------------------------------------------------
return [
    // cookie 保存时间
    'expire' => 0,
    // cookie 保存路径
    'path' => '/',
    // cookie 有效域名
    'domain' => '',
    //  cookie 启用安全传输
    'secure' => false,
    // httponly设置
    'httponly' => false,
    // 是否使用 setcookie
    'setcookie' => true,
];
