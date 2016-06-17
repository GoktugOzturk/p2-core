<?php
namespace Paranoia\Test\Processor\Dummy;

use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Processor\Dummy\PostAuthorizationResponseProcessor;
use Paranoia\Test\BaseTestCase;

class PostAuthorizationResponseProcessorTest extends BaseTestCase
{
    /**
     * @var \Paranoia\Processor\Dummy\PostAuthorizationResponseProcessor
     */
    private $processor;

    public function setUp()
    {
        parent::setUp();
        $this->processor = new PostAuthorizationResponseProcessor(new DummyConfiguration());
    }

    public function testRegularProcess()
    {
        $this->assertInstanceOf(
            '\\Paranoia\\Transfer\\Response\\PostAuthorizationResponse',
            $this->processor->process(array())
        );
    }
}
