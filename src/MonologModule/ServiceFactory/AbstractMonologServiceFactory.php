<?php

namespace MonologModule\ServiceFactory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\AbstractFactoryInterface;
use MonologModule\Service\MonologLoggerService;

/**
 * Class AbstractMonologServiceFactory
 *
 * @package MonologModule\ServiceFactory
 */
class AbstractMonologServiceFactory implements AbstractFactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $config = $serviceLocator->get('Config');

        return !empty($config['monolog']) && !empty($config['monolog']['handlers']);
    }

    /**
     * {@inheritDoc}
     */
    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        return new MonologLoggerService($serviceLocator);
    }
}
