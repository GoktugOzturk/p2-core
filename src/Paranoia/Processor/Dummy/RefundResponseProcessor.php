<?php
namespace Paranoia\Processor\Dummy;

use Paranoia\Transfer\Response\RefundResponse;

class RefundResponseProcessor extends AbstractDummyProcessor
{
    /**
     * @param mixed $rawResponse
     * @return \Paranoia\Transfer\ResponseInterface
     */
    protected function prepareResponse($rawResponse)
    {
        return new RefundResponse();
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
