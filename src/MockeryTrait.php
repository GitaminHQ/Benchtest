<?php

/*
 * This file is part of BenchTest.
 *
 * Copyright (C) 2015-2016 The Gitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenchTest;

use Mockery;

trait MockeryTrait
{
    /**
     * Tear down mockery.
     *
     * @after
     *
     * @return void
     */
    public function tearDownMockery()
    {
        if (class_exists(Mockery::class, false)) {
            $container = Mockery::getContainer();

            if ($container) {
                $this->addToAssertionCount($container->mockery_getExpectationCount());
            }

            Mockery::close();
        }
    }
}
