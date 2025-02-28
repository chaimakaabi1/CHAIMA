<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P1lgqsWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.p1lgqsW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.p1lgqsW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'admin' => ['privates', '.errored..service_locator.p1lgqsW.App\\Entity\\Admin', NULL, 'Cannot autowire service ".service_locator.p1lgqsW": it references class "App\\Entity\\Admin" but no such service exists.'],
        ], [
            'admin' => 'App\\Entity\\Admin',
        ]);
    }
}
