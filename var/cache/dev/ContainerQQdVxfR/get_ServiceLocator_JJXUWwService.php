<?php

namespace ContainerQQdVxfR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JJXUWwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jJ_XUWw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jJ_XUWw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'partenaire' => ['privates', '.errored..service_locator.jJ_XUWw.App\\Entity\\Partenaire', NULL, 'Cannot autowire service ".service_locator.jJ_XUWw": it references class "App\\Entity\\Partenaire" but no such service exists.'],
        ], [
            'partenaire' => 'App\\Entity\\Partenaire',
        ]);
    }
}
