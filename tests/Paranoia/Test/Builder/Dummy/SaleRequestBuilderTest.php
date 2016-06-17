<?php
namespace Paranoia\Test\Builder\Dummy;

use Paranoia\Builder\Dummy\SaleRequestBuilder;
use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Test\BaseTestCase;
use Paranoia\Transfer\Request\SaleRequest;

class SaleRequestBuilderTest extends BaseTestCase
{
    //TODO: Must develop a validation component to validating
    // request object before building transaction request.
    /**
     * @var \Paranoia\Builder\Dummy\SaleRequestBuilder
     */
    private $builder;

    /**
     * @var \Paranoia\Transfer\Request\SaleRequest
     */
    private $request;

    public function setUp()
    {
        parent::setUp();
        $this->builder = new SaleRequestBuilder(new DummyConfiguration());
        $this->request = new SaleRequest();
    }

    public function testRegularBuild()
    {
        $this->assertTrue($this->builder->build($this->request));
    }
}
