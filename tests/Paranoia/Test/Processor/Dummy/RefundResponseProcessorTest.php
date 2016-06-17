<?php
namespace Paranoia\Test\Processor\Dummy;

use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Processor\Dummy\RefundResponseProcessor;
use Paranoia\Test\BaseTestCase;

class RefundResponseProcessorTest extends BaseTestCase
{
    /**
     * @var \Paranoia\Processor\Dummy\RefundResponseProcessor
     */
    private $processor;

    public function setUp()
    {
        parent::setUp();
        $this->processor = new RefundResponseProcessor(new DummyConfiguration());
    }

    public function testRegularProcess()
    {
        $this->assertInstanceOf(
            '\\Paranoia\\Transfer\\Response\\RefundResponse',
            $this->processor->process(array())
        );
    }
}
