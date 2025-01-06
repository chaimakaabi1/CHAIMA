<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__PnOZS2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..PnOZS2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..PnOZS2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'registry' => ['services', 'doctrine', 'getDoctrineService', false],
            'student' => ['privates', '.errored..service_locator..PnOZS2.App\\Entity\\Student', NULL, 'Cannot autowire service ".service_locator..PnOZS2": it references class "App\\Entity\\Student" but no such service exists.'],
            'twilioService' => ['privates', 'App\\Service\\TwilioService', 'getTwilioServiceService', true],
        ], [
            'registry' => '?',
            'student' => 'App\\Entity\\Student',
            'twilioService' => 'App\\Service\\TwilioService',
        ]);
    }
}
