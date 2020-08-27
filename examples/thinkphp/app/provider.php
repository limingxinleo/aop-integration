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
use app\ExceptionHandle;
use app\Request;

// 容器Provider定义文件
return [
    'think\Request' => Request::class,
    'think\exception\Handle' => ExceptionHandle::class,
];
