<?php

namespace ContainerJjFUSen;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestataireRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PrestataireRepository' shared autowired service.
     *
     * @return \App\Repository\PrestataireRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PrestataireRepository'] = new \App\Repository\PrestataireRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
