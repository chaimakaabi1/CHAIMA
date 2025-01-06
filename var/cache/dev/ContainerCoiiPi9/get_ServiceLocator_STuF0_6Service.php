<?php

namespace ContainerCoiiPi9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_STuF0_6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sTuF0.6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sTuF0.6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chapitreRepository' => ['privates', 'App\\Repository\\ChapitreRepository', 'getChapitreRepositoryService', true],
            'courseRepository' => ['privates', 'App\\Repository\\CourseRepository', 'getCourseRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'chapitreRepository' => 'App\\Repository\\ChapitreRepository',
            'courseRepository' => 'App\\Repository\\CourseRepository',
            'entityManager' => '?',
        ]);
    }
}
