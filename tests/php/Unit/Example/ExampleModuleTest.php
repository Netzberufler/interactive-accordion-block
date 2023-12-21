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

namespace Interactive\AccordionBlock\Tests\Unit\Example;

use Interactive\AccordionBlock\Tests\Unit\AbstractTestCase;

class ExampleModuleTest extends AbstractTestCase
{

    public function testExampleShouldTrueBeSameAsTrue()
    {
        $this->assertSame(true, true);
    }
}
