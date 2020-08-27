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
// | 会话设置
// +----------------------------------------------------------------------

return [
    // session name
    'name' => 'PHPSESSID',
    // SESSION_ID的提交变量,解决flash上传跨域
    'var_session_id' => '',
    // 驱动方式 支持file cache
    'type' => 'file',
    // 存储连接标识 当type使用cache的时候有效
    'store' => null,
    // 过期时间
    'expire' => 1440,
    // 前缀
    'prefix' => '',
];
