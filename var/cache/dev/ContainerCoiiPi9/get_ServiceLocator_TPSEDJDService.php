<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TPSEDJDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tPSEDJD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tPSEDJD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'payment' => ['privates', '.errored..service_locator.tPSEDJD.App\\Entity\\Payment', NULL, 'Cannot autowire service ".service_locator.tPSEDJD": it references class "App\\Entity\\Payment" but no such service exists.'],
        ], [
            'payment' => 'App\\Entity\\Payment',
        ]);
    }
}
