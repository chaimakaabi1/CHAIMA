<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_UserProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.user_provider' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserProviderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'UserProviderListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'ChainUserProvider.php';

        return $container->privates['security.listener.user_provider'] = new \Symfony\Component\Security\Http\EventListener\UserProviderListener(new \Symfony\Component\Security\Core\User\ChainUserProvider(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.user.provider.concrete.app_admin_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppAdminProviderService'));
            yield 1 => ($container->privates['security.user.provider.concrete.app_student_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppStudentProviderService'));
            yield 2 => ($container->privates['security.user.provider.concrete.app_instructor_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppInstructorProviderService'));
            yield 3 => ($container->privates['security.user.provider.concrete.app_users'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUsersService'));
        }, 4)));
    }
}
