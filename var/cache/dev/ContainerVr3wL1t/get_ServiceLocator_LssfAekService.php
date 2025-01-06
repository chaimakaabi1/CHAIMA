<?php

namespace ContainerVr3wL1t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LssfAekService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lssfAek' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lssfAek'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'adminRepository' => ['privates', 'App\\Repository\\AdminRepository', 'getAdminRepositoryService', true],
        ], [
            'adminRepository' => 'App\\Repository\\AdminRepository',
        ]);
    }
}
