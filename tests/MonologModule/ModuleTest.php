<?php

namespace MonologModuleTest;

use PHPUnit_Framework_TestCase;
use PHPUnit_Framework_Assert;
use PHPUnit_Framework_MockObject_MockObject;
use MonologModule\Module;

/**
 * Class ModuleTest
 *
 * @package MonologModuleTest
 * @covers \MonologModule\Module
 */
class ModuleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PHPUnit_Framework_MockObject_MockObject|\Zend\Mvc\Application
     */
    private $application;

    /**
     * @var PHPUnit_Framework_MockObject_MockObject|\Zend\ServiceManager\ServiceManager
     */
    private $serviceManager;

    /**
     * Set up
     */
    public function setUp()
    {
        $this->application    = $this->getMock('Zend\Mvc\Application', [], [], '', false);
        $this->serviceManager = $this->getMock('Zend\ServiceManager\ServiceManager');
        $this
            ->application
            ->expects($this->any())
            ->method('getServiceManager')
            ->will($this->returnValue($this->serviceManager));

    }

    /**
     * @covers \MonologModule\Module::getConfig
     */
    public function testGetConfig()
    {
        $module = new Module();

        $config = $module->getConfig();

        $this->assertInternalType('array', $config);
        $this->assertArrayHasKey('service_manager', $config);

        $this->assertSame($config, unserialize(serialize($config)));
    }
}