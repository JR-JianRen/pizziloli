<?php

namespace ContainerSQpxbP2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_13OHCPcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.13OHCPc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.13OHCPc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'orderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'orderRepository' => 'App\\Repository\\OrderRepository',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}