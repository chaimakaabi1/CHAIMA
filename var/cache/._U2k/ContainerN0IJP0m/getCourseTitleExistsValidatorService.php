<?php

namespace ContainerN0IJP0m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCourseTitleExistsValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Validator\Constraints\CourseTitleExistsValidator' shared autowired service.
     *
     * @return \App\Validator\Constraints\CourseTitleExistsValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'CourseTitleExistsValidator.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\Validator\\Constraints\\CourseTitleExistsValidator'])) {
            return $container->privates['App\\Validator\\Constraints\\CourseTitleExistsValidator'];
        }

        return $container->privates['App\\Validator\\Constraints\\CourseTitleExistsValidator'] = new \App\Validator\Constraints\CourseTitleExistsValidator($a);
    }
}
