<?php

/*
 * This file is part of Contao Webpack Bundle.
 *
 * (c) Jonas Linn
 *
 */

namespace Pronego\ContaoWebpackBundle\Tests;

use Pronego\ContaoWebpackBundle\ContaoWebpackBundle;
use PHPUnit\Framework\TestCase;

class ContaoWebpackBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoWebpackBundle();

        $this->assertInstanceOf('Jlinn\WebpackBundle\ContaoWebpackBundle', $bundle);
    }
}
