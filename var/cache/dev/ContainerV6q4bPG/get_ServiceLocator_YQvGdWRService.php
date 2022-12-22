<?php

namespace ContainerV6q4bPG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YQvGdWRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yQvGdWR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yQvGdWR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'restaurantRepository' => ['privates', 'App\\Repository\\RestaurantRepository', 'getRestaurantRepositoryService', true],
        ], [
            'restaurantRepository' => 'App\\Repository\\RestaurantRepository',
        ]);
    }
}
