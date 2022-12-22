<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/booking/crud' => [[['_route' => 'app_admin_booking_crud_index', '_controller' => 'App\\Controller\\Admin\\BookingCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/booking/crud/new' => [[['_route' => 'app_admin_booking_crud_new', '_controller' => 'App\\Controller\\Admin\\BookingCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category/crud' => [[['_route' => 'app_admin_category_crud_index', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/crud/new' => [[['_route' => 'app_admin_category_crud_new', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/food/crud' => [[['_route' => 'app_admin_food_crud_index', '_controller' => 'App\\Controller\\Admin\\FoodCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/food/crud/new' => [[['_route' => 'app_admin_food_crud_new', '_controller' => 'App\\Controller\\Admin\\FoodCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/order/crud' => [[['_route' => 'app_admin_order_crud_index', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/order/crud/new' => [[['_route' => 'app_admin_order_crud_new', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/restaurant/crud' => [[['_route' => 'app_admin_restaurant_crud_index', '_controller' => 'App\\Controller\\Admin\\RestaurantCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/restaurant/crud/new' => [[['_route' => 'app_admin_restaurant_crud_new', '_controller' => 'App\\Controller\\Admin\\RestaurantCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/crud' => [[['_route' => 'app_admin_user_crud_index', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/crud/new' => [[['_route' => 'app_admin_user_crud_new', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/booking' => [[['_route' => 'app_booking_index', '_controller' => 'App\\Controller\\BookingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/booking/new' => [[['_route' => 'app_booking_new', '_controller' => 'App\\Controller\\BookingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|booking/crud/([^/]++)(?'
                        .'|(*:41)'
                        .'|/edit(*:53)'
                        .'|(*:60)'
                    .')'
                    .'|category/crud/([^/]++)(?'
                        .'|(*:93)'
                        .'|/edit(*:105)'
                        .'|(*:113)'
                    .')'
                    .'|food/crud/([^/]++)(?'
                        .'|(*:143)'
                        .'|/edit(*:156)'
                        .'|(*:164)'
                    .')'
                    .'|order/crud/([^/]++)(?'
                        .'|(*:195)'
                        .'|/edit(*:208)'
                        .'|(*:216)'
                    .')'
                    .'|restaurant/crud/([^/]++)(?'
                        .'|(*:252)'
                        .'|/edit(*:265)'
                        .'|(*:273)'
                    .')'
                    .'|user/crud/([^/]++)(?'
                        .'|(*:303)'
                        .'|/edit(*:316)'
                        .'|(*:324)'
                    .')'
                .')'
                .'|/booking/([^/]++)(?'
                    .'|(*:354)'
                    .'|/edit(*:367)'
                    .'|(*:375)'
                .')'
                .'|/restaurant/([^/]++)(*:404)'
                .'|/order/(?'
                    .'|index/([^/]++)(*:436)'
                    .'|new/([^/]++)/([^/]++)/([^/]++)(*:474)'
                    .'|([^/]++)/(?'
                        .'|show(*:498)'
                        .'|([^/]++)(?'
                            .'|/edit(*:522)'
                            .'|(*:530)'
                        .')'
                    .')'
                    .'|c(?'
                        .'|heckout/([^/]++)(*:560)'
                        .'|ancel\\-url([^/]++)(*:586)'
                    .')'
                    .'|success\\-url/([^/]++)(*:616)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:653)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'app_admin_booking_crud_show', '_controller' => 'App\\Controller\\Admin\\BookingCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        53 => [[['_route' => 'app_admin_booking_crud_edit', '_controller' => 'App\\Controller\\Admin\\BookingCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        60 => [[['_route' => 'app_admin_booking_crud_delete', '_controller' => 'App\\Controller\\Admin\\BookingCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_admin_category_crud_show', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        105 => [[['_route' => 'app_admin_category_crud_edit', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        113 => [[['_route' => 'app_admin_category_crud_delete', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        143 => [[['_route' => 'app_admin_food_crud_show', '_controller' => 'App\\Controller\\Admin\\FoodCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        156 => [[['_route' => 'app_admin_food_crud_edit', '_controller' => 'App\\Controller\\Admin\\FoodCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        164 => [[['_route' => 'app_admin_food_crud_delete', '_controller' => 'App\\Controller\\Admin\\FoodCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        195 => [[['_route' => 'app_admin_order_crud_show', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'app_admin_order_crud_edit', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'app_admin_order_crud_delete', '_controller' => 'App\\Controller\\Admin\\OrderCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        252 => [[['_route' => 'app_admin_restaurant_crud_show', '_controller' => 'App\\Controller\\Admin\\RestaurantCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        265 => [[['_route' => 'app_admin_restaurant_crud_edit', '_controller' => 'App\\Controller\\Admin\\RestaurantCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        273 => [[['_route' => 'app_admin_restaurant_crud_delete', '_controller' => 'App\\Controller\\Admin\\RestaurantCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_admin_user_crud_show', '_controller' => 'App\\Controller\\Admin\\UserCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_admin_user_crud_edit', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        324 => [[['_route' => 'app_admin_user_crud_delete', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        354 => [[['_route' => 'app_booking_show', '_controller' => 'App\\Controller\\BookingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        367 => [[['_route' => 'app_booking_edit', '_controller' => 'App\\Controller\\BookingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        375 => [[['_route' => 'app_booking_delete', '_controller' => 'App\\Controller\\BookingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        404 => [[['_route' => 'restaurant', '_controller' => 'App\\Controller\\HomeController::restaurant'], ['id'], null, null, false, true, null]],
        436 => [[['_route' => 'app_order_index', '_controller' => 'App\\Controller\\OrderController::index'], ['Uid'], ['GET' => 0], null, false, true, null]],
        474 => [[['_route' => 'app_order_new', '_controller' => 'App\\Controller\\OrderController::new'], ['Rid', 'Fid', 'Uid'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        498 => [[['_route' => 'app_order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        522 => [[['_route' => 'app_order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id', 'Uid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        530 => [[['_route' => 'app_order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id', 'Uid'], ['POST' => 0], null, false, true, null]],
        560 => [[['_route' => 'app_order_checkout', '_controller' => 'App\\Controller\\OrderController::checkout'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        586 => [[['_route' => 'cancel_url', '_controller' => 'App\\Controller\\OrderController::cancel'], ['Oid'], null, null, false, true, null]],
        616 => [[['_route' => 'success_url', '_controller' => 'App\\Controller\\OrderController::success'], ['Oid'], null, null, false, true, null]],
        653 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
