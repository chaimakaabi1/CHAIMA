<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_67OMvF7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.67OMvF7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.67OMvF7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cmnt' => ['privates', '.errored..service_locator.67OMvF7.App\\Entity\\Cmnt', NULL, 'Cannot autowire service ".service_locator.67OMvF7": it references class "App\\Entity\\Cmnt" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'cmnt' => 'App\\Entity\\Cmnt',
            'entityManager' => '?',
        ]);
    }
}
