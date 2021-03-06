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
 * @interface ViewAwareInterface
 *
 * @package Lucid\Module\Template
 * @version $Id$
 * @author iwyg <mail@thomas-appel.com>
 */
interface ViewAwareInterface
{
    /**
     * setManager
     *
     * @param ViewManagerInterface $view
     *
     * @return void
     */
    public function setManager(ViewManagerInterface $view);

    /**
     * getManager
     *
     * @return ViewManagerInterface
     */
    public function getManager();
}
