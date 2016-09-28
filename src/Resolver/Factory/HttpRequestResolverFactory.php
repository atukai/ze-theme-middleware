<?php

namespace At\Theme\Resolver\Factory;

use Interop\Container\ContainerInterface;
use At\Theme\Helper\ServerRequestHelper;
use At\Theme\Resolver\HttpRequestResolver;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class HttpRequestResolverFactory
 * @package Theme\Resolver\Factory
 */
class HttpRequestResolverFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return HttpRequestResolver
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new HttpRequestResolver($container->get(ServerRequestHelper::class));
    }
}