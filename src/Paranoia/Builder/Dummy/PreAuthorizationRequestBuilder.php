<?php
namespace Paranoia\Builder\Dummy;

use Paranoia\Transfer\RequestInterface;

class PreAuthorizationRequestBuilder extends AbstractDummyBuilder
{
    /**
     * @param \Paranoia\Transfer\RequestInterface $request
     * @return mixed
     */
    protected function prepareRequest(RequestInterface $request)
    {
        return true;
    }

    /**
     * @param \Paranoia\Transfer\RequestInterface $request
     * @return mixed
     */
    public function build(RequestInterface $request)
    {
        return $this->prepareRequest($request);
    }
}
