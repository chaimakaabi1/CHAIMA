<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayment1ControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Payment1Controller' shared autowired service.
     *
     * @return \App\Controller\Payment1Controller
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Payment1Controller.php';

        $container->services['App\\Controller\\Payment1Controller'] = $instance = new \App\Controller\Payment1Controller();

        $instance->setContainer(($container->privates['.service_locator.9Sq.cKZ'] ?? $container->load('get_ServiceLocator_9Sq_CKZService'))->withContext('App\\Controller\\Payment1Controller', $container));

        return $instance;
    }
}
