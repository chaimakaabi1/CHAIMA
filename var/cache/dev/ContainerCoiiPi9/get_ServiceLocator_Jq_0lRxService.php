<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jq_0lRxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jq.0lRx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jq.0lRx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'abonnement' => ['privates', '.errored..service_locator.Jq.0lRx.App\\Entity\\Abonnement', NULL, 'Cannot autowire service ".service_locator.Jq.0lRx": it references class "App\\Entity\\Abonnement" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'abonnement' => 'App\\Entity\\Abonnement',
            'entityManager' => '?',
        ]);
    }
}
