<?php

namespace ContainerGTOOV32;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KoSEVGhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.koSEVGh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.koSEVGh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'restaurant' => ['privates', '.errored..service_locator.koSEVGh.App\\Entity\\Restaurant', NULL, 'Cannot autowire service ".service_locator.koSEVGh": it references class "App\\Entity\\Restaurant" but no such service exists.'],
            'restaurantRepository' => ['privates', 'App\\Repository\\RestaurantRepository', 'getRestaurantRepositoryService', true],
        ], [
            'restaurant' => 'App\\Entity\\Restaurant',
            'restaurantRepository' => 'App\\Repository\\RestaurantRepository',
        ]);
    }
}
