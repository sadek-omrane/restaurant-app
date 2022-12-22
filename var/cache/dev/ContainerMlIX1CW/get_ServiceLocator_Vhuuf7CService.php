<?php

namespace ContainerMlIX1CW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vhuuf7CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Vhuuf7C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Vhuuf7C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'food' => ['privates', '.errored..service_locator.Vhuuf7C.App\\Entity\\Food', NULL, 'Cannot autowire service ".service_locator.Vhuuf7C": it references class "App\\Entity\\Food" but no such service exists.'],
            'foodRepository' => ['privates', 'App\\Repository\\FoodRepository', 'getFoodRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'food' => 'App\\Entity\\Food',
            'foodRepository' => 'App\\Repository\\FoodRepository',
            'slugger' => '?',
        ]);
    }
}
