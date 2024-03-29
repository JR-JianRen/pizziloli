<?php

namespace ContainerQGupV5I;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A6SCJ7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.A6S_CJ7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A6S_CJ7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\indexController::addToCart' => ['privates', '.service_locator.5OibA2.', 'get_ServiceLocator_5OibA2_Service', true],
            'App\\Controller\\indexController::allCategory' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\indexController::category' => ['privates', '.service_locator.URIEtQd', 'get_ServiceLocator_URIEtQdService', true],
            'App\\Controller\\indexController::deleteOrder' => ['privates', '.service_locator.3l59ajA', 'get_ServiceLocator_3l59ajAService', true],
            'App\\Controller\\indexController::home' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\indexController::orderForm' => ['privates', '.service_locator.13OHCPc', 'get_ServiceLocator_13OHCPcService', true],
            'App\\Controller\\indexController::orderFormAdmin' => ['privates', '.service_locator.VgZAvnB', 'get_ServiceLocator_VgZAvnBService', true],
            'App\\Controller\\indexController::updateStatus' => ['privates', '.service_locator.3l59ajA', 'get_ServiceLocator_3l59ajAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\indexController:addToCart' => ['privates', '.service_locator.5OibA2.', 'get_ServiceLocator_5OibA2_Service', true],
            'App\\Controller\\indexController:allCategory' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\indexController:category' => ['privates', '.service_locator.URIEtQd', 'get_ServiceLocator_URIEtQdService', true],
            'App\\Controller\\indexController:deleteOrder' => ['privates', '.service_locator.3l59ajA', 'get_ServiceLocator_3l59ajAService', true],
            'App\\Controller\\indexController:home' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\indexController:orderForm' => ['privates', '.service_locator.13OHCPc', 'get_ServiceLocator_13OHCPcService', true],
            'App\\Controller\\indexController:orderFormAdmin' => ['privates', '.service_locator.VgZAvnB', 'get_ServiceLocator_VgZAvnBService', true],
            'App\\Controller\\indexController:updateStatus' => ['privates', '.service_locator.3l59ajA', 'get_ServiceLocator_3l59ajAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\indexController::addToCart' => '?',
            'App\\Controller\\indexController::allCategory' => '?',
            'App\\Controller\\indexController::category' => '?',
            'App\\Controller\\indexController::deleteOrder' => '?',
            'App\\Controller\\indexController::home' => '?',
            'App\\Controller\\indexController::orderForm' => '?',
            'App\\Controller\\indexController::orderFormAdmin' => '?',
            'App\\Controller\\indexController::updateStatus' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\indexController:addToCart' => '?',
            'App\\Controller\\indexController:allCategory' => '?',
            'App\\Controller\\indexController:category' => '?',
            'App\\Controller\\indexController:deleteOrder' => '?',
            'App\\Controller\\indexController:home' => '?',
            'App\\Controller\\indexController:orderForm' => '?',
            'App\\Controller\\indexController:orderFormAdmin' => '?',
            'App\\Controller\\indexController:updateStatus' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
