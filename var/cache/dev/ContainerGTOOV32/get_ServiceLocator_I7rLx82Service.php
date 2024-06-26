<?php

namespace ContainerGTOOV32;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I7rLx82Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.I7rLx82' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.I7rLx82'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'booking' => ['privates', '.errored..service_locator.I7rLx82.App\\Entity\\Booking', NULL, 'Cannot autowire service ".service_locator.I7rLx82": it references class "App\\Entity\\Booking" but no such service exists.'],
            'bookingRepository' => ['privates', 'App\\Repository\\BookingRepository', 'getBookingRepositoryService', true],
        ], [
            'booking' => 'App\\Entity\\Booking',
            'bookingRepository' => 'App\\Repository\\BookingRepository',
        ]);
    }
}
