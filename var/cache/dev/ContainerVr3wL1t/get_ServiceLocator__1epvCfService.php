<?php

namespace ContainerVr3wL1t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__1epvCfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..1epvCf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..1epvCf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'review' => ['privates', '.errored..service_locator..1epvCf.App\\Entity\\Review', NULL, 'Cannot autowire service ".service_locator..1epvCf": it references class "App\\Entity\\Review" but no such service exists.'],
        ], [
            'review' => 'App\\Entity\\Review',
        ]);
    }
}
