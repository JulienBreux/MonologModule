<?php

namespace MonologModule\ServiceFactory;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class AbstractMonologServiceFactory
 *
 * @package MonologModule\ServiceFactory
 */
class AbstractMonologServiceFactory implements AbstractFactoryInterface
{
    /** @const string Monolog key */
    const MONOLOG_KEY = 'monolog';

    /** @const string Handlers key */
    const HANDLERS_KEY = 'handlers';

    /**
     * {@inheritDoc}
     */
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $config = $serviceLocator->get('config');
        if (array_key_exists(self::MONOLOG_KEY, $config)) {
            $monologConfig = $config[self::MONOLOG_KEY];
            if (array_key_exists(self::HANDLERS_KEY, $monologConfig)) {

            }
        }

        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {

    }
}
