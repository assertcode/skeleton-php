<?php

declare(strict_types=1);

/*
 * This file is part of Skeleton.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Skeleton\Tests;

use KodeKeep\Skeleton\Facades\Skeleton;
use KodeKeep\Skeleton\Providers\SkeletonServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [SkeletonServiceProvider::class];
    }

    protected function getPackageAliases($app): array
    {
        return ['Skeleton' => Skeleton::class];
    }
}
