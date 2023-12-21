<?php

/**
 * This file is part of the Interactive\AccordionBlock\Modules\Example.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * PHP version 8.0
 *
 * @category To do
 * @package  Interactive\AccordionBlock\Modules\Example
 * @author   AuthorName <hello@inpsyde.com>
 * @license  GPLv2+
 * @link     https://inpsyde.com/
 */

declare(strict_types=1);

namespace Interactive\AccordionBlock\Example;

use Inpsyde\Modularity\Module\ExecutableModule;
use Inpsyde\Modularity\Module\ModuleClassNameIdTrait;
use Psr\Container\ContainerInterface;

class ExampleModule implements ExecutableModule
{

    use ModuleClassNameIdTrait;

    public function run(ContainerInterface $container): bool
    {
        // TODO: Implement run() method.
        return true;
    }
}
