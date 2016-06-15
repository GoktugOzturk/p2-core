<?php
namespace Paranoia\Test\Factory;

use Paranoia\Configuration\NullConfiguration;
use Paranoia\Factory\NullFactory;
use Paranoia\Test\BaseTestCase;
use Paranoia\Test\Builder\Null\NullBuilderTest;

class NullFactoryTest extends BaseTestCase
{
    /** @var \Paranoia\Factory\NullFactory  */
    private $factory;

    const BUILDER_TYPE_NULL = 'NullRequestBuilder';
    const PROCESSOR_TYPE_NULL = 'NullResponseProcessor';
    const BUILDER_INTERFACE_PATH = '\\Paranoia\\BuilderInterface';
    const PROCESSOR_INTERFACE_PATH = '\\Paranoia\\ProcessorInterface';

    public function setUp()
    {
        parent::setUp();
        $this->factory = new NullFactory(new NullConfiguration());
    }

    public function testCreateBuilder()
    {
        $this->assertInstanceOf(self::BUILDER_INTERFACE_PATH, $this->factory->createBuilder(self::BUILDER_TYPE_NULL));
    }

    public function testCreateProcessor()
    {
        $this->assertInstanceOf(self::PROCESSOR_INTERFACE_PATH, $this->factory->createProcessor(self::PROCESSOR_TYPE_NULL));
    }
}
