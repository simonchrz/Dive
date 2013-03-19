<?php
/*
 * This file is part of the Dive ORM framework.
 * (c) Steffen Zeidler <sigma_z@sigma-scripts.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * @author Steffen Zeidler <sigma_z@sigma-scripts.de>
 * Date: 30.10.12
 */

namespace Dive\Event;

use Symfony\Component\EventDispatcher\EventDispatcher as SymfonyEventDispatcher;


class Dispatcher extends SymfonyEventDispatcher implements DispatcherInterface
{
}
