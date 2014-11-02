<?php

/*
 * This File is part of the Lucid\Module\Template\Helper package
 *
 * (c) iwyg <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Lucid\Module\Template\Helper;

use Lucid\Module\Template\EngineInterface;

/**
 * @class HelperInterface
 *
 * @package Lucid\Module\Template\Helper
 * @version $Id$
 * @author iwyg <mail@thomas-appel.com>
 */
interface HelperInterface
{
    public function getName();
    public function execute(array $arguments);
    public function setEngine(EngineInterface $engine);
}
