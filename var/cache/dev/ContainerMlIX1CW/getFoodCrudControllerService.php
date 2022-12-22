<?php

namespace ContainerMlIX1CW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFoodCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\FoodCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\FoodCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/FoodCrudController.php';

        $container->services['App\\Controller\\Admin\\FoodCrudController'] = $instance = new \App\Controller\Admin\FoodCrudController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Admin\\FoodCrudController', $container));

        return $instance;
    }
}