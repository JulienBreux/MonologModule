<?php

namespace MonologModule;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * Monolog Module
 *
 * @package MonologModule\Redis
 */
class Module implements ConfigProviderInterface
{
    /**
     * Get the module config
     *
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__.'/../../config/module.config.php';
    }
}
