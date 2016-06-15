<?php
namespace Paranoia;

use Paranoia\Transfer\RequestInterface;

interface BuilderInterface
{
    const BUILDER_TYPE_SALE = 'SaleRequestBuilder';
    const BUILDER_TYPE_REFUND = 'RefundRequestBuilder';
    const BUILDER_TYPE_CANCEL = 'CancelRequestBuilder';
    const BUILDER_TYPE_PRE_AUTHORIZATION = 'PreAuthorizationRequestBuilder';
    const BUILDER_TYPE_POST_AUTHOIZATION = 'PostAuthorizationRequestBuilder';

    /**
     * @param \Paranoia\Transfer\RequestInterface $request
     * @return mixed
     */
    public function build(RequestInterface $request);
}