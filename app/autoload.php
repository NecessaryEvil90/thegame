<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

<<<<<<< HEAD
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
=======
AnnotationRegistry::registerLoader([$loader, 'loadClass']);
>>>>>>> bb42cde024c869398b3ab734d17cf8dbebc47ef7

return $loader;
