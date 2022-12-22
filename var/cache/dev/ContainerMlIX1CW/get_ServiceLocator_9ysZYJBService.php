<?php

namespace ContainerMlIX1CW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9ysZYJBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9ysZYJB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9ysZYJB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\BookingCrudController::delete' => ['privates', '.service_locator..VDWsX1', 'get_ServiceLocator__VDWsX1Service', true],
            'App\\Controller\\Admin\\BookingCrudController::edit' => ['privates', '.service_locator..VDWsX1', 'get_ServiceLocator__VDWsX1Service', true],
            'App\\Controller\\Admin\\BookingCrudController::index' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\Admin\\BookingCrudController::new' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\Admin\\BookingCrudController::show' => ['privates', '.service_locator.v3bldx6', 'get_ServiceLocator_V3bldx6Service', true],
            'App\\Controller\\Admin\\CategoryCrudController::delete' => ['privates', '.service_locator.KksGd9j', 'get_ServiceLocator_KksGd9jService', true],
            'App\\Controller\\Admin\\CategoryCrudController::edit' => ['privates', '.service_locator.KksGd9j', 'get_ServiceLocator_KksGd9jService', true],
            'App\\Controller\\Admin\\CategoryCrudController::index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\Admin\\CategoryCrudController::new' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\Admin\\CategoryCrudController::show' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\Admin\\FoodCrudController::delete' => ['privates', '.service_locator.n2zonFT', 'get_ServiceLocator_N2zonFTService', true],
            'App\\Controller\\Admin\\FoodCrudController::edit' => ['privates', '.service_locator.Vhuuf7C', 'get_ServiceLocator_Vhuuf7CService', true],
            'App\\Controller\\Admin\\FoodCrudController::index' => ['privates', '.service_locator.MaycOWg', 'get_ServiceLocator_MaycOWgService', true],
            'App\\Controller\\Admin\\FoodCrudController::new' => ['privates', '.service_locator.4Qbp1JZ', 'get_ServiceLocator_4Qbp1JZService', true],
            'App\\Controller\\Admin\\FoodCrudController::show' => ['privates', '.service_locator.Sd.pLue', 'get_ServiceLocator_Sd_PLueService', true],
            'App\\Controller\\Admin\\OrderCrudController::delete' => ['privates', '.service_locator.JWdTOKa', 'get_ServiceLocator_JWdTOKaService', true],
            'App\\Controller\\Admin\\OrderCrudController::edit' => ['privates', '.service_locator.JWdTOKa', 'get_ServiceLocator_JWdTOKaService', true],
            'App\\Controller\\Admin\\OrderCrudController::index' => ['privates', '.service_locator.dcQF4U2', 'get_ServiceLocator_DcQF4U2Service', true],
            'App\\Controller\\Admin\\OrderCrudController::new' => ['privates', '.service_locator.dcQF4U2', 'get_ServiceLocator_DcQF4U2Service', true],
            'App\\Controller\\Admin\\OrderCrudController::show' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\Admin\\RestaurantCrudController::delete' => ['privates', '.service_locator.fcewfBB', 'get_ServiceLocator_FcewfBBService', true],
            'App\\Controller\\Admin\\RestaurantCrudController::edit' => ['privates', '.service_locator.fcewfBB', 'get_ServiceLocator_FcewfBBService', true],
            'App\\Controller\\Admin\\RestaurantCrudController::index' => ['privates', '.service_locator.yQvGdWR', 'get_ServiceLocator_YQvGdWRService', true],
            'App\\Controller\\Admin\\RestaurantCrudController::new' => ['privates', '.service_locator.z1fN4Ot', 'get_ServiceLocator_Z1fN4OtService', true],
            'App\\Controller\\Admin\\RestaurantCrudController::show' => ['privates', '.service_locator.qglMHHa', 'get_ServiceLocator_QglMHHaService', true],
            'App\\Controller\\Admin\\UserCrudController::delete' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\Admin\\UserCrudController::edit' => ['privates', '.service_locator.Zukv9C5', 'get_ServiceLocator_Zukv9C5Service', true],
            'App\\Controller\\Admin\\UserCrudController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\Admin\\UserCrudController::new' => ['privates', '.service_locator.yy.Upc_', 'get_ServiceLocator_Yy_UpcService', true],
            'App\\Controller\\Admin\\UserCrudController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\BookingController::delete' => ['privates', '.service_locator..VDWsX1', 'get_ServiceLocator__VDWsX1Service', true],
            'App\\Controller\\BookingController::edit' => ['privates', '.service_locator..VDWsX1', 'get_ServiceLocator__VDWsX1Service', true],
            'App\\Controller\\BookingController::index' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\BookingController::new' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\BookingController::show' => ['privates', '.service_locator.v3bldx6', 'get_ServiceLocator_V3bldx6Service', true],
            'App\\Controller\\HomeController::home' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\HomeController::restaurant' => ['privates', '.service_locator.qglMHHa', 'get_ServiceLocator_QglMHHaService', true],
            'App\\Controller\\OrderController::cancel' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\OrderController::checkout' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\OrderController::delete' => ['privates', '.service_locator.IEX6idM', 'get_ServiceLocator_IEX6idMService', true],
            'App\\Controller\\OrderController::edit' => ['privates', '.service_locator.IEX6idM', 'get_ServiceLocator_IEX6idMService', true],
            'App\\Controller\\OrderController::index' => ['privates', '.service_locator.rblvi0X', 'get_ServiceLocator_Rblvi0XService', true],
            'App\\Controller\\OrderController::new' => ['privates', '.service_locator.lxeUxK2', 'get_ServiceLocator_LxeUxK2Service', true],
            'App\\Controller\\OrderController::show' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\OrderController::success' => ['privates', '.service_locator.JWdTOKa', 'get_ServiceLocator_JWdTOKaService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\BookingCrudController:delete' => ['privates', '.service_locator..VDWsX1', 'get_ServiceLocator__VDWsX1Service', true],
            'App\\Controller\\Admin\\BookingCrudController:edit' => ['privates', '.service_locator..VDWsX1', 'get_ServiceLocator__VDWsX1Service', true],
            'App\\Controller\\Admin\\BookingCrudController:index' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\Admin\\BookingCrudController:new' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\Admin\\BookingCrudController:show' => ['privates', '.service_locator.v3bldx6', 'get_ServiceLocator_V3bldx6Service', true],
            'App\\Controller\\Admin\\CategoryCrudController:delete' => ['privates', '.service_locator.KksGd9j', 'get_ServiceLocator_KksGd9jService', true],
            'App\\Controller\\Admin\\CategoryCrudController:edit' => ['privates', '.service_locator.KksGd9j', 'get_ServiceLocator_KksGd9jService', true],
            'App\\Controller\\Admin\\CategoryCrudController:index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\Admin\\CategoryCrudController:new' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\Admin\\CategoryCrudController:show' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\Admin\\FoodCrudController:delete' => ['privates', '.service_locator.n2zonFT', 'get_ServiceLocator_N2zonFTService', true],
            'App\\Controller\\Admin\\FoodCrudController:edit' => ['privates', '.service_locator.Vhuuf7C', 'get_ServiceLocator_Vhuuf7CService', true],
            'App\\Controller\\Admin\\FoodCrudController:index' => ['privates', '.service_locator.MaycOWg', 'get_ServiceLocator_MaycOWgService', true],
            'App\\Controller\\Admin\\FoodCrudController:new' => ['privates', '.service_locator.4Qbp1JZ', 'get_ServiceLocator_4Qbp1JZService', true],
            'App\\Controller\\Admin\\FoodCrudController:show' => ['privates', '.service_locator.Sd.pLue', 'get_ServiceLocator_Sd_PLueService', true],
            'App\\Controller\\Admin\\OrderCrudController:delete' => ['privates', '.service_locator.JWdTOKa', 'get_ServiceLocator_JWdTOKaService', true],
            'App\\Controller\\Admin\\OrderCrudController:edit' => ['privates', '.service_locator.JWdTOKa', 'get_ServiceLocator_JWdTOKaService', true],
            'App\\Controller\\Admin\\OrderCrudController:index' => ['privates', '.service_locator.dcQF4U2', 'get_ServiceLocator_DcQF4U2Service', true],
            'App\\Controller\\Admin\\OrderCrudController:new' => ['privates', '.service_locator.dcQF4U2', 'get_ServiceLocator_DcQF4U2Service', true],
            'App\\Controller\\Admin\\OrderCrudController:show' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\Admin\\RestaurantCrudController:delete' => ['privates', '.service_locator.fcewfBB', 'get_ServiceLocator_FcewfBBService', true],
            'App\\Controller\\Admin\\RestaurantCrudController:edit' => ['privates', '.service_locator.fcewfBB', 'get_ServiceLocator_FcewfBBService', true],
            'App\\Controller\\Admin\\RestaurantCrudController:index' => ['privates', '.service_locator.yQvGdWR', 'get_ServiceLocator_YQvGdWRService', true],
            'App\\Controller\\Admin\\RestaurantCrudController:new' => ['privates', '.service_locator.z1fN4Ot', 'get_ServiceLocator_Z1fN4OtService', true],
            'App\\Controller\\Admin\\RestaurantCrudController:show' => ['privates', '.service_locator.qglMHHa', 'get_ServiceLocator_QglMHHaService', true],
            'App\\Controller\\Admin\\UserCrudController:delete' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\Admin\\UserCrudController:edit' => ['privates', '.service_locator.Zukv9C5', 'get_ServiceLocator_Zukv9C5Service', true],
            'App\\Controller\\Admin\\UserCrudController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\Admin\\UserCrudController:new' => ['privates', '.service_locator.yy.Upc_', 'get_ServiceLocator_Yy_UpcService', true],
            'App\\Controller\\Admin\\UserCrudController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\BookingController:delete' => ['privates', '.service_locator..VDWsX1', 'get_ServiceLocator__VDWsX1Service', true],
            'App\\Controller\\BookingController:edit' => ['privates', '.service_locator..VDWsX1', 'get_ServiceLocator__VDWsX1Service', true],
            'App\\Controller\\BookingController:index' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\BookingController:new' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\BookingController:show' => ['privates', '.service_locator.v3bldx6', 'get_ServiceLocator_V3bldx6Service', true],
            'App\\Controller\\HomeController:home' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\HomeController:restaurant' => ['privates', '.service_locator.qglMHHa', 'get_ServiceLocator_QglMHHaService', true],
            'App\\Controller\\OrderController:cancel' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\OrderController:checkout' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\OrderController:delete' => ['privates', '.service_locator.IEX6idM', 'get_ServiceLocator_IEX6idMService', true],
            'App\\Controller\\OrderController:edit' => ['privates', '.service_locator.IEX6idM', 'get_ServiceLocator_IEX6idMService', true],
            'App\\Controller\\OrderController:index' => ['privates', '.service_locator.rblvi0X', 'get_ServiceLocator_Rblvi0XService', true],
            'App\\Controller\\OrderController:new' => ['privates', '.service_locator.lxeUxK2', 'get_ServiceLocator_LxeUxK2Service', true],
            'App\\Controller\\OrderController:show' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\OrderController:success' => ['privates', '.service_locator.JWdTOKa', 'get_ServiceLocator_JWdTOKaService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\BookingCrudController::delete' => '?',
            'App\\Controller\\Admin\\BookingCrudController::edit' => '?',
            'App\\Controller\\Admin\\BookingCrudController::index' => '?',
            'App\\Controller\\Admin\\BookingCrudController::new' => '?',
            'App\\Controller\\Admin\\BookingCrudController::show' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::delete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::edit' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::index' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::new' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::show' => '?',
            'App\\Controller\\Admin\\FoodCrudController::delete' => '?',
            'App\\Controller\\Admin\\FoodCrudController::edit' => '?',
            'App\\Controller\\Admin\\FoodCrudController::index' => '?',
            'App\\Controller\\Admin\\FoodCrudController::new' => '?',
            'App\\Controller\\Admin\\FoodCrudController::show' => '?',
            'App\\Controller\\Admin\\OrderCrudController::delete' => '?',
            'App\\Controller\\Admin\\OrderCrudController::edit' => '?',
            'App\\Controller\\Admin\\OrderCrudController::index' => '?',
            'App\\Controller\\Admin\\OrderCrudController::new' => '?',
            'App\\Controller\\Admin\\OrderCrudController::show' => '?',
            'App\\Controller\\Admin\\RestaurantCrudController::delete' => '?',
            'App\\Controller\\Admin\\RestaurantCrudController::edit' => '?',
            'App\\Controller\\Admin\\RestaurantCrudController::index' => '?',
            'App\\Controller\\Admin\\RestaurantCrudController::new' => '?',
            'App\\Controller\\Admin\\RestaurantCrudController::show' => '?',
            'App\\Controller\\Admin\\UserCrudController::delete' => '?',
            'App\\Controller\\Admin\\UserCrudController::edit' => '?',
            'App\\Controller\\Admin\\UserCrudController::index' => '?',
            'App\\Controller\\Admin\\UserCrudController::new' => '?',
            'App\\Controller\\Admin\\UserCrudController::show' => '?',
            'App\\Controller\\BookingController::delete' => '?',
            'App\\Controller\\BookingController::edit' => '?',
            'App\\Controller\\BookingController::index' => '?',
            'App\\Controller\\BookingController::new' => '?',
            'App\\Controller\\BookingController::show' => '?',
            'App\\Controller\\HomeController::home' => '?',
            'App\\Controller\\HomeController::restaurant' => '?',
            'App\\Controller\\OrderController::cancel' => '?',
            'App\\Controller\\OrderController::checkout' => '?',
            'App\\Controller\\OrderController::delete' => '?',
            'App\\Controller\\OrderController::edit' => '?',
            'App\\Controller\\OrderController::index' => '?',
            'App\\Controller\\OrderController::new' => '?',
            'App\\Controller\\OrderController::show' => '?',
            'App\\Controller\\OrderController::success' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\BookingCrudController:delete' => '?',
            'App\\Controller\\Admin\\BookingCrudController:edit' => '?',
            'App\\Controller\\Admin\\BookingCrudController:index' => '?',
            'App\\Controller\\Admin\\BookingCrudController:new' => '?',
            'App\\Controller\\Admin\\BookingCrudController:show' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:delete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:edit' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:index' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:new' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:show' => '?',
            'App\\Controller\\Admin\\FoodCrudController:delete' => '?',
            'App\\Controller\\Admin\\FoodCrudController:edit' => '?',
            'App\\Controller\\Admin\\FoodCrudController:index' => '?',
            'App\\Controller\\Admin\\FoodCrudController:new' => '?',
            'App\\Controller\\Admin\\FoodCrudController:show' => '?',
            'App\\Controller\\Admin\\OrderCrudController:delete' => '?',
            'App\\Controller\\Admin\\OrderCrudController:edit' => '?',
            'App\\Controller\\Admin\\OrderCrudController:index' => '?',
            'App\\Controller\\Admin\\OrderCrudController:new' => '?',
            'App\\Controller\\Admin\\OrderCrudController:show' => '?',
            'App\\Controller\\Admin\\RestaurantCrudController:delete' => '?',
            'App\\Controller\\Admin\\RestaurantCrudController:edit' => '?',
            'App\\Controller\\Admin\\RestaurantCrudController:index' => '?',
            'App\\Controller\\Admin\\RestaurantCrudController:new' => '?',
            'App\\Controller\\Admin\\RestaurantCrudController:show' => '?',
            'App\\Controller\\Admin\\UserCrudController:delete' => '?',
            'App\\Controller\\Admin\\UserCrudController:edit' => '?',
            'App\\Controller\\Admin\\UserCrudController:index' => '?',
            'App\\Controller\\Admin\\UserCrudController:new' => '?',
            'App\\Controller\\Admin\\UserCrudController:show' => '?',
            'App\\Controller\\BookingController:delete' => '?',
            'App\\Controller\\BookingController:edit' => '?',
            'App\\Controller\\BookingController:index' => '?',
            'App\\Controller\\BookingController:new' => '?',
            'App\\Controller\\BookingController:show' => '?',
            'App\\Controller\\HomeController:home' => '?',
            'App\\Controller\\HomeController:restaurant' => '?',
            'App\\Controller\\OrderController:cancel' => '?',
            'App\\Controller\\OrderController:checkout' => '?',
            'App\\Controller\\OrderController:delete' => '?',
            'App\\Controller\\OrderController:edit' => '?',
            'App\\Controller\\OrderController:index' => '?',
            'App\\Controller\\OrderController:new' => '?',
            'App\\Controller\\OrderController:show' => '?',
            'App\\Controller\\OrderController:success' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}