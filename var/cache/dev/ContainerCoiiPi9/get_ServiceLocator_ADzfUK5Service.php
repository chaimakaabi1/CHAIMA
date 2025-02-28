<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ADzfUK5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ADzfUK5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ADzfUK5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'payment' => ['privates', '.errored..service_locator.ADzfUK5.App\\Entity\\Payment', NULL, 'Cannot autowire service ".service_locator.ADzfUK5": it references class "App\\Entity\\Payment" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'payment' => 'App\\Entity\\Payment',
        ]);
    }
}
