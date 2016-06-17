<?php
namespace Paranoia\Processor\Dummy;

use Paranoia\Transfer\Response\PostAuthorizationResponse;

class PostAuthorizationResponseProcessor extends AbstractDummyProcessor
{
    /**
     * @param mixed $rawResponse
     * @return \Paranoia\Transfer\ResponseInterface
     */
    protected function prepareResponse($rawResponse)
    {
        return new PostAuthorizationResponse();
    }

    /**
     * @param $rawResponse
     * @return \Paranoia\Transfer\ResponseInterface
     */
    public function process($rawResponse)
    {
        return $this->prepareResponse($rawResponse);
    }
}
