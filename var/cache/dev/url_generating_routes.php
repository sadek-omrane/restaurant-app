<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_admin_booking_crud_index' => [[], ['_controller' => 'App\\Controller\\Admin\\BookingCrudController::index'], [], [['text', '/admin/booking/crud/']], [], [], []],
    'app_admin_booking_crud_new' => [[], ['_controller' => 'App\\Controller\\Admin\\BookingCrudController::new'], [], [['text', '/admin/booking/crud/new']], [], [], []],
    'app_admin_booking_crud_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\BookingCrudController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/booking/crud']], [], [], []],
    'app_admin_booking_crud_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\BookingCrudController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/booking/crud']], [], [], []],
    'app_admin_booking_crud_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\BookingCrudController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/booking/crud']], [], [], []],
    'app_admin_category_crud_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryCrudController::index'], [], [['text', '/admin/category/crud/']], [], [], []],
    'app_admin_category_crud_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryCrudController::new'], [], [['text', '/admin/category/crud/new']], [], [], []],
    'app_admin_category_crud_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryCrudController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/crud']], [], [], []],
    'app_admin_category_crud_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryCrudController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/crud']], [], [], []],
    'app_admin_category_crud_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryCrudController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/crud']], [], [], []],
    'app_admin_dashboard' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_admin_food_crud_index' => [[], ['_controller' => 'App\\Controller\\Admin\\FoodCrudController::index'], [], [['text', '/admin/food/crud/']], [], [], []],
    'app_admin_food_crud_new' => [[], ['_controller' => 'App\\Controller\\Admin\\FoodCrudController::new'], [], [['text', '/admin/food/crud/new']], [], [], []],
    'app_admin_food_crud_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\FoodCrudController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/food/crud']], [], [], []],
    'app_admin_food_crud_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\FoodCrudController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/food/crud']], [], [], []],
    'app_admin_food_crud_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\FoodCrudController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/food/crud']], [], [], []],
    'app_admin_order_crud_index' => [[], ['_controller' => 'App\\Controller\\Admin\\OrderCrudController::index'], [], [['text', '/admin/order/crud/']], [], [], []],
    'app_admin_order_crud_new' => [[], ['_controller' => 'App\\Controller\\Admin\\OrderCrudController::new'], [], [['text', '/admin/order/crud/new']], [], [], []],
    'app_admin_order_crud_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\OrderCrudController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/order/crud']], [], [], []],
    'app_admin_order_crud_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\OrderCrudController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/order/crud']], [], [], []],
    'app_admin_order_crud_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\OrderCrudController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/order/crud']], [], [], []],
    'app_admin_restaurant_crud_index' => [[], ['_controller' => 'App\\Controller\\Admin\\RestaurantCrudController::index'], [], [['text', '/admin/restaurant/crud/']], [], [], []],
    'app_admin_restaurant_crud_new' => [[], ['_controller' => 'App\\Controller\\Admin\\RestaurantCrudController::new'], [], [['text', '/admin/restaurant/crud/new']], [], [], []],
    'app_admin_restaurant_crud_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\RestaurantCrudController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/restaurant/crud']], [], [], []],
    'app_admin_restaurant_crud_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\RestaurantCrudController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/restaurant/crud']], [], [], []],
    'app_admin_restaurant_crud_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\RestaurantCrudController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/restaurant/crud']], [], [], []],
    'app_admin_user_crud_index' => [[], ['_controller' => 'App\\Controller\\Admin\\UserCrudController::index'], [], [['text', '/admin/user/crud/']], [], [], []],
    'app_admin_user_crud_new' => [[], ['_controller' => 'App\\Controller\\Admin\\UserCrudController::new'], [], [['text', '/admin/user/crud/new']], [], [], []],
    'app_admin_user_crud_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserCrudController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user/crud']], [], [], []],
    'app_admin_user_crud_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserCrudController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user/crud']], [], [], []],
    'app_admin_user_crud_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserCrudController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user/crud']], [], [], []],
    'app_booking_index' => [[], ['_controller' => 'App\\Controller\\BookingController::index'], [], [['text', '/booking/']], [], [], []],
    'app_booking_new' => [[], ['_controller' => 'App\\Controller\\BookingController::new'], [], [['text', '/booking/new']], [], [], []],
    'app_booking_show' => [['id'], ['_controller' => 'App\\Controller\\BookingController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/booking']], [], [], []],
    'app_booking_edit' => [['id'], ['_controller' => 'App\\Controller\\BookingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/booking']], [], [], []],
    'app_booking_delete' => [['id'], ['_controller' => 'App\\Controller\\BookingController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/booking']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], [], []],
    'restaurant' => [['id'], ['_controller' => 'App\\Controller\\HomeController::restaurant'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/restaurant']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\HomeController::about'], [], [['text', '/about']], [], [], []],
    'app_order_index' => [['Uid'], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['variable', '/', '[^/]++', 'Uid', true], ['text', '/order/index']], [], [], []],
    'app_order_new' => [['Rid', 'Fid', 'Uid'], ['_controller' => 'App\\Controller\\OrderController::new'], [], [['variable', '/', '[^/]++', 'Uid', true], ['variable', '/', '[^/]++', 'Fid', true], ['variable', '/', '[^/]++', 'Rid', true], ['text', '/order/new']], [], [], []],
    'app_order_show' => [['id'], ['_controller' => 'App\\Controller\\OrderController::show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/order']], [], [], []],
    'app_order_edit' => [['id', 'Uid'], ['_controller' => 'App\\Controller\\OrderController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'Uid', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/order']], [], [], []],
    'app_order_delete' => [['id', 'Uid'], ['_controller' => 'App\\Controller\\OrderController::delete'], [], [['variable', '/', '[^/]++', 'Uid', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/order']], [], [], []],
    'app_order_checkout' => [['id'], ['_controller' => 'App\\Controller\\OrderController::checkout'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/order/checkout']], [], [], []],
    'success_url' => [['Oid'], ['_controller' => 'App\\Controller\\OrderController::success'], [], [['variable', '/', '[^/]++', 'Oid', true], ['text', '/order/success-url']], [], [], []],
    'cancel_url' => [['Oid'], ['_controller' => 'App\\Controller\\OrderController::cancel'], [], [['variable', '', '[^/]++', 'Oid', true], ['text', '/order/cancel-url']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
