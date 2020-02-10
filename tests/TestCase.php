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

use Illuminate\Contracts\Console\Application;
use KodeKeep\Skeleton\Facades\SkeletonFacade;
use KodeKeep\Skeleton\SkeletonServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders(Application $app): array
    {
        return [SkeletonServiceProvider::class];
    }

    protected function getPackageAliases(Application $app): array
    {
        return ['Skeleton' => SkeletonFacade::class];
    }
}
