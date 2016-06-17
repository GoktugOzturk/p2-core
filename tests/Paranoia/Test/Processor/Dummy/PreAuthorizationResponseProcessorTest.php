<?php
namespace Paranoia\Test\Processor\Dummy;

use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Processor\Dummy\PreAuthorizationResponseProcessor;
use Paranoia\Test\BaseTestCase;

class PreAuthorizationResponseProcessorTest extends BaseTestCase
{
    /**
     * @var \Paranoia\Processor\Dummy\PreAuthorizationResponseProcessor
     */
    private $processor;

    public function setUp()
    {
        parent::setUp();
        $this->processor = new PreAuthorizationResponseProcessor(new DummyConfiguration());
    }

    public function testRegularProcess()
    {
        $this->assertInstanceOf(
            '\\Paranoia\\Transfer\\Response\\PreAuthorizationResponse',
            $this->processor->process(array())
        );
    }
}
