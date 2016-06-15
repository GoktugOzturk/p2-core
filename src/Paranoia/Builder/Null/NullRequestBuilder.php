<?php
namespace Paranoia\Builder\Null;

use Paranoia\Builder\AbstractBuilder;
use Paranoia\Transfer\RequestInterface;

class NullRequestBuilder extends AbstractBuilder
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