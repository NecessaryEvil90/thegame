<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
<<<<<<< HEAD
        $bundles = array(
=======
        $bundles = [
>>>>>>> bb42cde024c869398b3ab734d17cf8dbebc47ef7
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
<<<<<<< HEAD
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
=======
>>>>>>> bb42cde024c869398b3ab734d17cf8dbebc47ef7
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new NEvil\UserBundle\NEvilUserBundle(),
            new NEvil\FrontLobbyBundle\NEvilFrontLobbyBundle(),
            new NEvil\FrontendBundle\NEvilFrontendBundle(),
<<<<<<< HEAD
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
=======
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
>>>>>>> bb42cde024c869398b3ab734d17cf8dbebc47ef7
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

<<<<<<< HEAD
=======
    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

>>>>>>> bb42cde024c869398b3ab734d17cf8dbebc47ef7
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
