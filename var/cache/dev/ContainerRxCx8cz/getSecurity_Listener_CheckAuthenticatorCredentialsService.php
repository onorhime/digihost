<?php

namespace ContainerRxCx8cz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_CheckAuthenticatorCredentialsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.check_authenticator_credentials' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CheckCredentialsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CheckCredentialsListener.php';

        return $container->privates['security.listener.check_authenticator_credentials'] = new \Symfony\Component\Security\Http\EventListener\CheckCredentialsListener(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')));
    }
}
