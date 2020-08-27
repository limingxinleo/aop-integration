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
namespace Hyperf\AopIntegration;

use Hyperf\Di\ClassLoader as Loader;

class ClassLoader extends Loader
{
    protected function loadDotenv(): void
    {
    }
}
