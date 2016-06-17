<?php
namespace Paranoia\Processor\Dummy;

use Paranoia\Transfer\Response\CancelResponse;

class CancelResponseProcessor extends AbstractDummyProcessor
{
    /**
     * @param mixed $rawResponse
     * @return \Paranoia\Transfer\ResponseInterface
     */
    protected function prepareResponse($rawResponse)
    {
        return new CancelResponse();
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