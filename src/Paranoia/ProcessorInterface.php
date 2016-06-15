<?php
namespace Paranoia;

interface ProcessorInterface
{
    const PROCESSOR_TYPE_SALE = 'SaleResponseProcessor';
    const PROCESSOR_TYPE_REFUND = 'RefundResponseProcessor';
    const PROCESSOR_TYPE_CANCEL = 'CancelResponseProcessor';
    const PROCESSOR_TYPE_PRE_AUTHORIZATION = 'PreAuthorizationResponseProcessor';
    const PROCESSOR_TYPE_POST_AUTHORIZATION = 'PostAuthorizationResponseProcessor';

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\ResponseInterface
     */
    public function process($rawResponse);
}