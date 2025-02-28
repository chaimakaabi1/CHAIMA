<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChapitreControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ChapitreController' shared autowired service.
     *
     * @return \App\Controller\ChapitreController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ChapitreController.php';

        $container->services['App\\Controller\\ChapitreController'] = $instance = new \App\Controller\ChapitreController();

        $instance->setContainer(($container->privates['.service_locator.9Sq.cKZ'] ?? $container->load('get_ServiceLocator_9Sq_CKZService'))->withContext('App\\Controller\\ChapitreController', $container));

        return $instance;
    }
}
