<?php

namespace ContainerV6q4bPG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_478xwl1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.478xwl1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.478xwl1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.478xwl1.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.478xwl1": it references class "App\\Entity\\Category" but no such service exists.'],
        ], [
            'category' => 'App\\Entity\\Category',
        ]);
    }
}
