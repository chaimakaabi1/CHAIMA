<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0eHhLLJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0eHhLLJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0eHhLLJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'admin' => ['privates', '.errored..service_locator.0eHhLLJ.App\\Entity\\Admin', NULL, 'Cannot autowire service ".service_locator.0eHhLLJ": it references class "App\\Entity\\Admin" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'admin' => 'App\\Entity\\Admin',
            'entityManager' => '?',
        ]);
    }
}
