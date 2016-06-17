<?php
namespace Paranoia\Test\Adapter;

use Paranoia\Adapter\DummyAdapter;
use Paranoia\Configuration\DummyConfiguration;
use Paranoia\Test\BaseTestCase;
use Paranoia\Transfer\Request\CancelRequest;
use Paranoia\Transfer\Request\PostAuthorizationRequest;
use Paranoia\Transfer\Request\PreAuthorizationRequest;
use Paranoia\Transfer\Request\RefundRequest;
use Paranoia\Transfer\Request\SaleRequest;

class DummyAdapterTest extends BaseTestCase
{
    /**
     * @var \Paranoia\Adapter\DummyAdapter
     */
    private $adapter;

    public function setUp()
    {
        parent::setUp();
        $this->adapter = new DummyAdapter(new DummyConfiguration());
    }

    public function testRegularBuildSaleRequest()
    {
        $this->assertTrue($this->adapter->buildSaleRequest(new SaleRequest()));
    }

    public function testRegularBuildRefundRequest()
    {
        $this->assertTrue($this->adapter->buildRefundRequest(new RefundRequest()));
    }

    public function testRegularBuildCancelRequest()
    {
        $this->assertTrue($this->adapter->buildCancelRequest(new CancelRequest()));
    }

    public function testRegularBuildPreAuthorizationRequest()
    {
        $this->assertTrue($this->adapter->buildPreAuthorizationRequest(new PreAuthorizationRequest()));
    }

    public function testRegularBuildPostAuthorizationRequest()
    {
        $this->assertTrue($this->adapter->buildPostAuthorizationRequest(new PostAuthorizationRequest()));
    }

    public function testProcessSaleResponse()
    {
        $this->assertInstanceOf(
          '\\Paranoia\\Transfer\\Response\\SaleResponse',
            $this->adapter->processSaleResponse(array())
        );
    }

    public function testProcessRefundResponse()
    {
        $this->assertInstanceOf(
            '\\Paranoia\\Transfer\\Response\\RefundResponse',
            $this->adapter->processRefundResponse(array())
        );
    }

    public function testProcessCancelResponse()
    {
        $this->assertInstanceOf(
            '\\Paranoia\\Transfer\\Response\\CancelResponse',
            $this->adapter->processCancelResponse(array())
        );
    }

    public function testProcessPreAuthorizationResponse()
    {
        $this->assertInstanceOf(
            '\\Paranoia\\Transfer\\Response\\PreAuthorizationResponse',
            $this->adapter->processPreAuthorizationResponse(array())
        );
    }

    public function testProcessPostAuthorizationResponse()
    {
        $this->assertInstanceOf(
            '\\Paranoia\\Transfer\\Response\\PostAuthorizationResponse',
            $this->adapter->processPostAuthorizationResponse(array())
        );
    }
}
