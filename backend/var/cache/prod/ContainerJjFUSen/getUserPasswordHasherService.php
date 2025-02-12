<?php

namespace ContainerJjFUSen;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserPasswordHasherService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\State\UserPasswordHasher' shared autowired service.
     *
     * @return \App\State\UserPasswordHasher
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\State\\UserPasswordHasher'] = new \App\State\UserPasswordHasher(($container->privates['api_platform.doctrine.orm.state.persist_processor'] ?? $container->load('getApiPlatform_Doctrine_Orm_State_PersistProcessorService')), new \Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService'))));
    }
}
