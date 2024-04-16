<?php

namespace ContainerMo1ycBq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NtchPrJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ntchPrJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ntchPrJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\DashboardController::deposit' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\DashboardController::profile' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\DashboardController::settings' => ['privates', '.service_locator.wyuvUzy', 'get_ServiceLocator_WyuvUzyService', true],
            'App\\Controller\\DashboardController::withdrawal' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\HomeController::encodePassword' => ['privates', '.service_locator.mV93_wt', 'get_ServiceLocator_MV93WtService', true],
            'App\\Controller\\HomeController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\HomeController::register' => ['privates', '.service_locator.BrtGyjg', 'get_ServiceLocator_BrtGyjgService', true],
            'App\\Controller\\HomeController::verify' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\DashboardController:deposit' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\DashboardController:profile' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\DashboardController:settings' => ['privates', '.service_locator.wyuvUzy', 'get_ServiceLocator_WyuvUzyService', true],
            'App\\Controller\\DashboardController:withdrawal' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\HomeController:encodePassword' => ['privates', '.service_locator.mV93_wt', 'get_ServiceLocator_MV93WtService', true],
            'App\\Controller\\HomeController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\HomeController:register' => ['privates', '.service_locator.BrtGyjg', 'get_ServiceLocator_BrtGyjgService', true],
            'App\\Controller\\HomeController:verify' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\DashboardController::deposit' => '?',
            'App\\Controller\\DashboardController::profile' => '?',
            'App\\Controller\\DashboardController::settings' => '?',
            'App\\Controller\\DashboardController::withdrawal' => '?',
            'App\\Controller\\HomeController::encodePassword' => '?',
            'App\\Controller\\HomeController::login' => '?',
            'App\\Controller\\HomeController::register' => '?',
            'App\\Controller\\HomeController::verify' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\DashboardController:deposit' => '?',
            'App\\Controller\\DashboardController:profile' => '?',
            'App\\Controller\\DashboardController:settings' => '?',
            'App\\Controller\\DashboardController:withdrawal' => '?',
            'App\\Controller\\HomeController:encodePassword' => '?',
            'App\\Controller\\HomeController:login' => '?',
            'App\\Controller\\HomeController:register' => '?',
            'App\\Controller\\HomeController:verify' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
