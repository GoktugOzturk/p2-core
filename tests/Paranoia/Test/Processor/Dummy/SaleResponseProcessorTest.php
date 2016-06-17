<?php
namespace Paranoia\Test\Processor\Dummy;

use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Processor\Dummy\SaleResponseProcessor;
use Paranoia\Test\BaseTestCase;

class SaleResponseProcessorTest extends BaseTestCase
{
    /**
     * @var \Paranoia\Processor\Dummy\SaleResponseProcessor
     */
    private $processor;

    public function setUp()
    {
        parent::setUp();
        $this->processor = new SaleResponseProcessor(new DummyConfiguration());
    }

    public function testRegularProcess()
    {
        $this->assertInstanceOf(
            '\\Paranoia\\Transfer\\Response\\SaleResponse',
            $this->processor->process(array())
        );
    }
}
