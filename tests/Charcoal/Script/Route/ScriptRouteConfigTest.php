<?php

namespace Charcoal\Tests\Script\Route;

// From PSR-7
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

// From Pimple
use Pimple\Container;

// From 'charcoal-factory'
use Charcoal\Factory\GenericFactory as Factory;

// From 'charcoal-app'
use Charcoal\Script\Route\ScriptRoute;
use Charcoal\Script\Route\ScriptRouteConfig;
use Charcoal\Tests\AbstractTestCase;
use Charcoal\Tests\Script\ContainerProvider;

/**
 *
 */
class ScriptRouteConfigTest extends AbstractTestCase
{
    /**
     * Tested Class.
     *
     * @var ScriptRoute
     */
    private $obj;

    /**
     * Set up the test.
     */
    public function setUp()
    {
        $this->obj = new ScriptRouteConfig([
            'controller' => 'foo/bar'
        ]);
    }

    public function testSelf()
    {
        $this->assertInstanceOf(ScriptRouteConfig::class, $this->obj);
    }

}
