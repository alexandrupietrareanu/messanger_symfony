<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/images' => [
            [['_route' => 'app_imagepost_list', '_controller' => 'App\\Controller\\ImagePostController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_imagepost_create', '_controller' => 'App\\Controller\\ImagePostController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/' => [[['_route' => 'app_main_homepage', '_controller' => 'App\\Controller\\MainController::homepage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/images/([^/]++)(?'
                    .'|(*:30)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [
            [['_route' => 'app_imagepost_delete', '_controller' => 'App\\Controller\\ImagePostController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'get_image_post_item', '_controller' => 'App\\Controller\\ImagePostController::getItem'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
