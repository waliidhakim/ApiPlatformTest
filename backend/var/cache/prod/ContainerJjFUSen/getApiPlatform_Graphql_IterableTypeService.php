<?php

namespace ContainerJjFUSen;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_IterableTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.graphql.iterable_type' shared service.
     *
     * @return \ApiPlatform\GraphQl\Type\Definition\IterableType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.graphql.iterable_type'] = new \ApiPlatform\GraphQl\Type\Definition\IterableType();
    }
}
