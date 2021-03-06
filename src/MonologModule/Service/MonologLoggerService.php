<?php

namespace MonologModule\Service;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class MonologLoggerService
 *
 * @package MonologModule\Service
 */
class MonologLoggerService implements ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;

    /**
     * Constructor
     *
     * @param ServiceLocatorInterface $serviceLocator Service locator
     */
    public function __construct(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }

    /**
     * Log through channel system (by inclusion)
     *
     * @param array $channelsIncluded Channels included
     */
    public function in(array $channelsIncluded)
    {

    }

    /**
     * Log through channel (by exclusion)
     *
     * @param array $channelsExcluded Channels excluded
     */
    public function notIn(array $channelsExcluded)
    {

    }

    /**
     * Use only specified handlers
     *
     * @param array $handlersIncluded Handlers included
     */
    public function with(array $handlersIncluded)
    {

    }

    /**
     * Use all handlers except handlers excluded
     *
     * @param array $handlersExcluded Handlers excluded
     */
    public function without(array $handlersExcluded)
    {

    }
}
