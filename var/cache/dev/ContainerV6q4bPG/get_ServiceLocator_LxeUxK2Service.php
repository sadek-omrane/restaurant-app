<?php

namespace ContainerV6q4bPG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LxeUxK2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lxeUxK2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lxeUxK2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'food' => ['privates', '.errored..service_locator.lxeUxK2.App\\Entity\\Food', NULL, 'Cannot autowire service ".service_locator.lxeUxK2": it references class "App\\Entity\\Food" but no such service exists.'],
            'orderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
            'restaurant' => ['privates', '.errored..service_locator.lxeUxK2.App\\Entity\\Restaurant', NULL, 'Cannot autowire service ".service_locator.lxeUxK2": it references class "App\\Entity\\Restaurant" but no such service exists.'],
            'user' => ['privates', '.errored..service_locator.lxeUxK2.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.lxeUxK2": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'food' => 'App\\Entity\\Food',
            'orderRepository' => 'App\\Repository\\OrderRepository',
            'restaurant' => 'App\\Entity\\Restaurant',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
