<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8SqYtTLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8SqYtTL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8SqYtTL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'stripeSK' => ['privates', '.value.j9_NKio', 'get_Value_J9NKioService', true],
        ], [
            'stripeSK' => '?',
        ]);
    }
}
