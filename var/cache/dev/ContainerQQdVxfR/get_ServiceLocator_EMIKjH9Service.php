<?php

namespace ContainerQQdVxfR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EMIKjH9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EMIKjH9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EMIKjH9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'candidature' => ['privates', '.errored..service_locator.EMIKjH9.App\\Entity\\Candidature', NULL, 'Cannot autowire service ".service_locator.EMIKjH9": it references class "App\\Entity\\Candidature" but no such service exists.'],
        ], [
            'candidature' => 'App\\Entity\\Candidature',
        ]);
    }
}
