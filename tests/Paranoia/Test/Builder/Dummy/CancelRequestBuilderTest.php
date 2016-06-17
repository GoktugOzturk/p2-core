<?php
namespace Paranoia\Test\Builder\Dummy;

use Paranoia\Builder\Dummy\CancelRequestBuilder;
use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Test\BaseTestCase;
use Paranoia\Transfer\Request\CancelRequest;

class CancelRequestBuilderTest extends BaseTestCase
{
    //TODO: Must develop a validation component to validating
    // request object before building transaction request.
    /**
     * @var \Paranoia\Builder\Dummy\CancelRequestBuilder
     */
    private $builder;

    /**
     * @var \Paranoia\Transfer\Request\CancelRequest
     */
    private $request;

    public function setUp()
    {
        parent::setUp();
        $this->builder = new CancelRequestBuilder(new DummyConfiguration());
        $this->request = new CancelRequest();
    }

    public function testRegularBuild()
    {
        $this->assertTrue($this->builder->build($this->request));
    }
}
