<?php

/**
 * This file is part of @package Interactive\AccordionBlock.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Interactive\AccordionBlock\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

abstract class AbstractTestCase extends TestCase
{
    use MockeryPHPUnitIntegration;

    /**
     * Sets up the environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Tears down the environment.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        parent::tearDown();
    }
}
