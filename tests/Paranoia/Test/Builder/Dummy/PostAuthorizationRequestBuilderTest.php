<?php
namespace Paranoia\Test\Builder\Dummy;

use Paranoia\Builder\Dummy\PostAuthorizationRequestBuilder;
use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Test\BaseTestCase;
use Paranoia\Transfer\Request\PostAuthorizationRequest;

class PostAuthorizationRequestBuilderTest extends BaseTestCase
{
    //TODO: Must develop a validation component to validating
    // request object before building transaction request.
    /**
     * @var \Paranoia\Builder\Dummy\PostAuthorizationRequestBuilder
     */
    private $builder;

    /**
     * @var \Paranoia\Transfer\Request\PostAuthorizationRequest
     */
    private $request;

    public function setUp()
    {
        parent::setUp();
        $this->builder = new PostAuthorizationRequestBuilder(new DummyConfiguration());
        $this->request = new PostAuthorizationRequest();
    }

    public function testRegularBuild()
    {
        $this->assertTrue($this->builder->build($this->request));
    }
}
