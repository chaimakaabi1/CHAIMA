<?php

namespace ContainerVr3wL1t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDonationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DonationController' shared autowired service.
     *
     * @return \App\Controller\DonationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'DonationController.php';

        $container->services['App\\Controller\\DonationController'] = $instance = new \App\Controller\DonationController();

        $instance->setContainer(($container->privates['.service_locator.VNYrXmz'] ?? $container->load('get_ServiceLocator_VNYrXmzService'))->withContext('App\\Controller\\DonationController', $container));

        return $instance;
    }
}
