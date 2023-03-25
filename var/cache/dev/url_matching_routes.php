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
        '/allCategory' => [[['_route' => 'app_allCategory', '_controller' => 'App\\Controller\\indexController::allCategory'], null, null, null, false, false, null]],
        '/orderForm' => [[['_route' => 'app_orderForm', '_controller' => 'App\\Controller\\indexController::orderForm'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\indexController::login'], null, null, null, false, false, null]],
        '/orderForm/admin' => [[['_route' => 'app_orderFormAdmin', '_controller' => 'App\\Controller\\indexController::orderFormAdmin'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/category/([^/]++)(*:25)'
                .'|/addToCart/([^/]++)(*:51)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:89)'
                    .'|wdt/([^/]++)(*:108)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:154)'
                            .'|router(*:168)'
                            .'|exception(?'
                                .'|(*:188)'
                                .'|\\.css(*:201)'
                            .')'
                        .')'
                        .'|(*:211)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'app_category', '_controller' => 'App\\Controller\\indexController::category'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'app_addToCart', '_controller' => 'App\\Controller\\indexController::addToCart'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        108 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        154 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        188 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        201 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        211 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
