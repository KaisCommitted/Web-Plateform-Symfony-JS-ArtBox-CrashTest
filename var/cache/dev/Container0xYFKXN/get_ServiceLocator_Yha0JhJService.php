<?php

namespace Container0xYFKXN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yha0JhJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Yha0JhJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Yha0JhJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'poste' => ['privates', '.errored..service_locator.Yha0JhJ.App\\Entity\\Postes', NULL, 'Cannot autowire service ".service_locator.Yha0JhJ": it references class "App\\Entity\\Postes" but no such service exists.'],
        ], [
            'poste' => 'App\\Entity\\Postes',
        ]);
    }
}
