<?php
namespace Paranoia\Test\Processor\Null;

use Paranoia\Configuration\NullConfiguration;
use Paranoia\Processor\Null\NullResponseProcessor;
use Paranoia\Test\BaseTestCase;

class NullProcessorTest extends BaseTestCase
{
    const RESPONSE_CLASS_PATH = '\\Paranoia\\Transfer\\Response\\NullResponse';

    /** @var \Paranoia\Processor\Null\NullProcessor  */
    private $processor;

    public function setUp()
    {
        parent::setUp();
        $this->processor = new NullResponseProcessor(new NullConfiguration());
    }

    public function testProcess()
    {
        $this->assertInstanceOf(self::RESPONSE_CLASS_PATH, $this->processor->process(true));
    }
}
