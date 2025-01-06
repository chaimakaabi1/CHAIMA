<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CHABmpFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CHABmpF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CHABmpF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'instructor' => ['privates', '.errored..service_locator.CHABmpF.App\\Entity\\Instructor', NULL, 'Cannot autowire service ".service_locator.CHABmpF": it references class "App\\Entity\\Instructor" but no such service exists.'],
        ], [
            'instructor' => 'App\\Entity\\Instructor',
        ]);
    }
}
