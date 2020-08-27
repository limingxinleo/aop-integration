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
namespace think;

use Hyperf\AopIntegration\ClassLoader;

require __DIR__ . '/../vendor/autoload.php';

// 初始化 AOP
! defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1));

ClassLoader::init();

$app = new App();

// 执行HTTP应用并响应
$http = $app->http;

$response = $http->run();

$response->send();

$http->end($response);
