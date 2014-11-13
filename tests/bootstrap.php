<?php

use Zend\Mvc\Service\ServiceManagerConfig;
use Zend\ServiceManager\ServiceManager;

date_default_timezone_set('UTC');
error_reporting(E_ALL | E_STRICT);
chdir(__DIR__);

/**
 * Tests Bootstrap
 */
class Bootstrap
{
    /** @var ServiceManager Service manager */
    protected static $serviceManager;

    /**
     * Initialize tests
     */
    public static function init()
    {
        self::initAutoloader();

        if (is_readable(__DIR__ . '/TestConfig.php')) {
            $testConfig = include __DIR__ . '/TestConfig.php';
        } else {
            $testConfig = include __DIR__ . '/TestConfig.php.dist';
        }

        $serviceManager = new ServiceManager(new ServiceManagerConfig());

        $serviceManager->setService('ApplicationConfig', $testConfig);

        /* @var $moduleManager \Zend\ModuleManager\ModuleManagerInterface */
        $moduleManager = $serviceManager->get('ModuleManager');
        $moduleManager->loadModules();

        static::$serviceManager = $serviceManager;
    }

    /**
     * Initialize autoloader
     */
    protected static function initAutoloader()
    {
        $files = [__DIR__ . '/../vendor/autoload.php', __DIR__ . '/../../../autoload.php'];
        foreach ($files as $file) {
            if (is_readable($file)) {
                $loader = require $file;
                break;
            }
        }

        if (!isset($loader)) {
            throw new RuntimeException(
                'Sorry, vendor/autoload.php could not be found. Did you run `php composer.phar install`?'
            );
        }

        $loader->addPsr4('MonologModule\\', __DIR__.'/MonologModule');
    }

    /**
     * Get service manager
     *
     * @return ServiceManager
     */
    public static function getServiceManager()
    {
        return static::$serviceManager;
    }
}

Bootstrap::init();
