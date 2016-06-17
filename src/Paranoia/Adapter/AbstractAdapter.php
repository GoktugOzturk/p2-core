<?php
namespace Paranoia\Adapter;

use Paranoia\AdapterInterface;
use Paranoia\BuilderInterface;
use Paranoia\ConfigurationInterface;
use Paranoia\FactoryInterface;
use Paranoia\ProcessorInterface;
use Paranoia\Transfer\Request\CancelRequest;
use Paranoia\Transfer\Request\PostAuthorizationRequest;
use Paranoia\Transfer\Request\PreAuthorizationRequest;
use Paranoia\Transfer\Request\RefundRequest;
use Paranoia\Transfer\Request\SaleRequest;

abstract class AbstractAdapter implements AdapterInterface
{
    /**
     * @var \Paranoia\ConfigurationInterface
     */
    private $config;

    /**
     * @var \Paranoia\FactoryInterface
     */
    protected $factory;

    /**
     * AbstractAdapter constructor.
     * @param \Paranoia\ConfigurationInterface $config
     */
    public function __construct(ConfigurationInterface $config, FactoryInterface $factory)
    {
        $this->config = $config;
        $this->factory = $factory;
    }

    /**
     * @return \Paranoia\ConfigurationInterface
     */
    protected function getConfig()
    {
        return $this->config;
    }

    /**
     * @return \Paranoia\FactoryInterface
     */
    protected function getFactory()
    {
        return $this->factory;
    }

    /**
     * @param \Paranoia\Transfer\Request\SaleRequest $request
     * @return mixed
     */
    public function buildSaleRequest(SaleRequest $request)
    {
        return $this->getFactory()->createBuilder(BuilderInterface::BUILDER_TYPE_SALE)->build($request);
    }

    /**
     * @param \Paranoia\Transfer\Request\RefundRequest $request
     * @return mixed
     */
    public function buildRefundRequest(RefundRequest $request)
    {
        return $this->getFactory()->createBuilder(BuilderInterface::BUILDER_TYPE_REFUND)->build($request);
    }

    /**
     * @param \Paranoia\Transfer\Request\CancelRequest $request
     * @return mixed
     */
    public function buildCancelRequest(CancelRequest $request)
    {
        return $this->getFactory()->createBuilder(BuilderInterface::BUILDER_TYPE_CANCEL)->build($request);
    }

    /**
     * @param \Paranoia\Transfer\Request\PreAuthorizationRequest $request
     * @return mixed
     */
    public function buildPreAuthorizationRequest(PreAuthorizationRequest $request)
    {
        return $this->getFactory()->createBuilder(BuilderInterface::BUILDER_TYPE_PRE_AUTHORIZATION)->build($request);
    }

    /**
     * @param \Paranoia\Transfer\Request\PostAuthorizationRequest $request
     * @return mixed
     */
    public function buildPostAuthorizationRequest(PostAuthorizationRequest $request)
    {
        return $this->getFactory()->createBuilder(BuilderInterface::BUILDER_TYPE_POST_AUTHOIZATION)->build($request);
    }

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\Response\SaleResponse
     */
    public function processSaleResponse($rawResponse)
    {
        return $this->getFactory()->createProcessor(ProcessorInterface::PROCESSOR_TYPE_SALE)
            ->process($rawResponse);
    }

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\Response\RefundResponse
     */
    public function processRefundResponse($rawResponse)
    {
        return $this->getFactory()->createProcessor(ProcessorInterface::PROCESSOR_TYPE_REFUND)
            ->process($rawResponse);
    }

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\Response\CancelResponse
     */
    public function processCancelResponse($rawResponse)
    {
        return $this->getFactory()->createProcessor(ProcessorInterface::PROCESSOR_TYPE_CANCEL)
            ->process($rawResponse);
    }

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\Response\PreAuthorizationResponse
     */
    public function processPreAuthorizationResponse($rawResponse)
    {
        return $this->getFactory()->createProcessor(ProcessorInterface::PROCESSOR_TYPE_PRE_AUTHORIZATION)
            ->process($rawResponse);
    }

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\Response\PostAuthorizationResponse
     */
    public function processPostAuthorizationResponse($rawResponse)
    {
        return $this->getFactory()->createProcessor(ProcessorInterface::PROCESSOR_TYPE_POST_AUTHORIZATION)
            ->process($rawResponse);
    }
}
