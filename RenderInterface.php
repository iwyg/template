<?php

/*
 * This File is part of the Lucid\Module\Template package
 *
 * (c) iwyg <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Lucid\Module\Template;

/**
 * @interface RenderInterface
 *
 * @package Lucid\Module\Template
 * @version $Id$
 * @author iwyg <mail@thomas-appel.com>
 */
interface RenderInterface
{
    /**
     * Renders a given template
     *
     * @param mixed $template   the template
     * @param array $parameters the parameters
     *
     * @return string
     */
    public function render($template, array $parameters = []);
}
