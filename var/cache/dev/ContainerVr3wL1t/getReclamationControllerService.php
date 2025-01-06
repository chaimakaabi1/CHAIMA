<?php

namespace ContainerVr3wL1t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReclamationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ReclamationController' shared autowired service.
     *
     * @return \App\Controller\ReclamationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ReclamationController.php';

        $container->services['App\\Controller\\ReclamationController'] = $instance = new \App\Controller\ReclamationController(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')));

        $instance->setContainer(($container->privates['.service_locator.VNYrXmz'] ?? $container->load('get_ServiceLocator_VNYrXmzService'))->withContext('App\\Controller\\ReclamationController', $container));

        return $instance;
    }
}
