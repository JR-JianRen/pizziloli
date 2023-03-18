<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\indexController::home'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\indexController::contact'], null, null, null, false, false, null]],
        '/menuAll' => [[['_route' => 'app_menuAll', '_controller' => 'App\\Controller\\indexController::menuAll'], null, null, null, false, false, null]],
        '/orderView' => [[['_route' => 'app_orderView', '_controller' => 'App\\Controller\\indexController::insert'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/menu/([^/]++)(*:21)'
                .'|/orderProduct/([^/]++)(*:50)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:88)'
                    .'|wdt/([^/]++)(*:107)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:153)'
                            .'|router(*:167)'
                            .'|exception(?'
                                .'|(*:187)'
                                .'|\\.css(*:200)'
                            .')'
                        .')'
                        .'|(*:210)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [[['_route' => 'app_menu', '_controller' => 'App\\Controller\\indexController::menu'], ['id'], null, null, false, true, null]],
        50 => [[['_route' => 'app_orderProduct', '_controller' => 'App\\Controller\\indexController::insert2'], ['id'], null, null, false, true, null]],
        88 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        107 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        153 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        167 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        187 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        200 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        210 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
