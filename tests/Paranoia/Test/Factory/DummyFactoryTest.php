<?php
namespace Paranoia\Test\Factory;

use Paranoia\BuilderInterface;
use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Factory\DummyFactory;
use Paranoia\ProcessorInterface;
use Paranoia\Test\BaseTestCase;

class DummyFactoryTest extends BaseTestCase
{
    /**
     * @var \Paranoia\Factory\DummyFactory
     */
    private $factory;

    public function setUp()
    {
        parent::setUp();
        $this->factory = new DummyFactory(new DummyConfiguration());
    }

    public function testCreateBuilder()
    {
        $this->assertInstanceOf(
            '\\Paranoia\\BuilderInterface',
            $this->factory->createBuilder(BuilderInterface::BUILDER_TYPE_SALE)
        );
    }

    public function testCreateProcessor()
    {
        $this->assertInstanceOf(
            '\\Paranoia\\ProcessorInterface',
            $this->factory->createProcessor(ProcessorInterface::PROCESSOR_TYPE_SALE)
        );
    }
}
