<?php

namespace ContainerVr3wL1t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AJrQ0X1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aJrQ0X1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aJrQ0X1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'courseRepository' => ['privates', 'App\\Repository\\CourseRepository', 'getCourseRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'courseRepository' => 'App\\Repository\\CourseRepository',
            'entityManager' => '?',
        ]);
    }
}
