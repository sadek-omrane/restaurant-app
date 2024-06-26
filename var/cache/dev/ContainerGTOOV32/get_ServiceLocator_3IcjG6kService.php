<?php

namespace ContainerGTOOV32;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3IcjG6kService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3IcjG6k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3IcjG6k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'orderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.3IcjG6k.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.3IcjG6k": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'orderRepository' => 'App\\Repository\\OrderRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
