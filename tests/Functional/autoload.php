<?php

/*
 * This file is part of the Fidry\AliceBundleExtension package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Composer\Autoload\ClassLoader;
use Doctrine\Common\Annotations\AnnotationRegistry;

/*
 * @var ClassLoader
 */
$loader = require __DIR__.'/../../vendor/autoload.php';
require 'AppKernel.php';

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
