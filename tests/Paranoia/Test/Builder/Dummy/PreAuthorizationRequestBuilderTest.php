<?php
namespace Paranoia\Test\Builder\Dummy;

use Paranoia\Builder\Dummy\PreAuthorizationRequestBuilder;
use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Test\BaseTestCase;
use Paranoia\Transfer\Request\PreAuthorizationRequest;

class PreAuthorizationRequestBuilderTest extends BaseTestCase
{
    //TODO: Must develop a validation component to validating
    // request object before building transaction request.
    /**
     * @var \Paranoia\Builder\Dummy\PreAuthorizationRequestBuilder
     */
    private $builder;

    /**
     * @var \Paranoia\Transfer\Request\PreAuthorizationRequest
     */
    private $request;

    public function setUp()
    {
        parent::setUp();
        $this->builder = new PreAuthorizationRequestBuilder(new DummyConfiguration());
        $this->request = new PreAuthorizationRequest();
    }

    public function testRegularBuild()
    {
        $this->assertTrue($this->builder->build($this->request));
    }
}
