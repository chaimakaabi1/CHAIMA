<?php

namespace ContainerVr3wL1t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P_KW_1hService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P.kW.1h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P.kW.1h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cmntRepository' => ['privates', 'App\\Repository\\CmntRepository', 'getCmntRepositoryService', true],
        ], [
            'cmntRepository' => 'App\\Repository\\CmntRepository',
        ]);
    }
}
