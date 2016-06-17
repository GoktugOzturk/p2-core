<?php
namespace Paranoia\Test\Processor\Dummy;

use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Processor\Dummy\CancelResponseProcessor;
use Paranoia\Test\BaseTestCase;

class CancelResponseProcessorTest extends BaseTestCase
{
    /**
     * @var \Paranoia\Processor\Dummy\CancelResponseProcessor
     */
    private $processor;

    public function setUp()
    {
        parent::setUp();
        $this->processor = new CancelResponseProcessor(new DummyConfiguration());
    }

    public function testRegularProcess()
    {
        $this->assertInstanceOf(
            '\\Paranoia\\Transfer\\Response\\CancelResponse',
            $this->processor->process(array())
        );
    }
}
