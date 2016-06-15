<?php
namespace Paranoia;

use Paranoia\Transfer\Request\CancelRequest;
use Paranoia\Transfer\Request\PostAuthorizationRequest;
use Paranoia\Transfer\Request\PreAuthorizationRequest;
use Paranoia\Transfer\Request\RefundRequest;
use Paranoia\Transfer\Request\SaleRequest;

interface AdapterInterface
{
    /**
     * @param \Paranoia\Transfer\Request\SaleRequest $request
     * @return mixed
     */
    public function buildSaleRequest(SaleRequest $request);

    /**
     * @param \Paranoia\Transfer\Request\RefundRequest $request
     * @return mixed
     */
    public function buildRefundRequest(RefundRequest $request);

    /**
     * @param \Paranoia\Transfer\Request\CancelRequest $request
     * @return mixed
     */
    public function buildCancelRequest(CancelRequest $request);

    /**
     * @param \Paranoia\Transfer\Request\PreAuthorizationRequest $request
     * @return mixed
     */
    public function buildPreAuthorizationRequest(PreAuthorizationRequest $request);

    /**
     * @param \Paranoia\Transfer\Request\PostAuthorizationRequest $request
     * @return mixed
     */
    public function buildPostAuthorizationRequest(PostAuthorizationRequest $request);

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\Response\SaleResponse
     */
    public function processSaleResponse($rawResponse);

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\Response\RefundResponse
     */
    public function processRefundResponse($rawResponse);

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\Response\CancelResponse
     */
    public function processCancelResponse($rawResponse);

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\Response\PreAuthorizationResponse
     */
    public function processPreAuthorizationResponse($rawResponse);

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\Response\PostAuthorizationResponse
     */
    public function processPostAuthorizationResponse($rawResponse);
}