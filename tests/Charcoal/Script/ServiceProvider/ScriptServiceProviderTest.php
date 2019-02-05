<?php

namespace Charcoal\Tests\Script\ServiceProvider;

use Charcoal\Factory\GenericFactory;
use League\CLImate\CLImate;
use Pimple\Container;

use Charcoal\Script\ServiceProvider\ScriptServiceProvider;
use Charcoal\Tests\AbstractTestCase;
use Psr\Log\NullLogger;

/**
 *
 */
class ScriptServiceProviderTest extends AbstractTestCase
{
    public function testProvider()
    {
        $container = new Container();
        $provider  = new ScriptServiceProvider();
        $provider->register($container);

        $this->assertTrue(isset($container['script/factory']));
        $this->assertTrue(isset($container['script/climate/reader']));
        $this->assertTrue(isset($container['script/climate']));

        $container['logger'] = function() {
            return new NullLogger();
        };

        $scriptFactory = $container['script/factory'];
        $this->assertInstanceOf(GenericFactory::class, $scriptFactory);

        $climate = $container['script/climate'];
        $this->assertInstanceOf(CLImate::class, $climate);
    }
}
