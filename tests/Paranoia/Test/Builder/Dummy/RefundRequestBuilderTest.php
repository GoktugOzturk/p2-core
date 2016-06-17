<?php
namespace Paranoia\Test\Builder\Dummy;

use Paranoia\Builder\Dummy\RefundRequestBuilder;
use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Test\BaseTestCase;
use Paranoia\Transfer\Request\RefundRequest;

class RefundRequestBuilderTest extends BaseTestCase
{
    //TODO: Must develop a validation component to validating
    // request object before building transaction request.
    /**
     * @var \Paranoia\Builder\Dummy\RefundRequestBuilder
     */
    private $builder;

    /**
     * @var \Paranoia\Transfer\Request\RefundRequest
     */
    private $request;

    public function setUp()
    {
        parent::setUp();
        $this->builder = new RefundRequestBuilder(new DummyConfiguration());
        $this->request = new RefundRequest();
    }

    public function testRegularBuild()
    {
        $this->assertTrue($this->builder->build($this->request));
    }
}
