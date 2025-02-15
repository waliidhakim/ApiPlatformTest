<?php

namespace ContainerJjFUSen;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_JsonSchema_TypeFactoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.json_schema.type_factory' shared service.
     *
     * @return \ApiPlatform\JsonSchema\TypeFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['api_platform.json_schema.type_factory'] = $instance = new \ApiPlatform\JsonSchema\TypeFactory(($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)));

        $instance->setSchemaFactory(($container->privates['api_platform.hydra.json_schema.schema_factory'] ?? $container->load('getApiPlatform_Hydra_JsonSchema_SchemaFactoryService')));

        return $instance;
    }
}
