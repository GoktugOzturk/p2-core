<?php
namespace Paranoia\Processor\Null;

use Paranoia\Processor\AbstractProcessor;
use Paranoia\Transfer\Response\NullResponse;

class NullResponseProcessor extends AbstractProcessor
{
    /**
     * @param mixed $rawResponse
     * @return \Paranoia\Transfer\ResponseInterface
     */
    protected function prepareResponse($rawResponse)
    {
        return new NullResponse();
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
