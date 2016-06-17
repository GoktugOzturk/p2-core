<?php
namespace Paranoia\Helper\Http;

class HttpResponse
{
    private $code;

    private $response;

    /**
     * HttpResponse constructor.
     * @param $code
     * @param $response
     */
    public function __construct($code, $response)
    {
        $this->code = $code;
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }
}
