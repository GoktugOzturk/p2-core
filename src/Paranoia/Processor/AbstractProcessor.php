<?php
namespace Paranoia\Processor;

use Paranoia\ConfigurationInterface;
use Paranoia\ProcessorInterface;

abstract class AbstractProcessor implements ProcessorInterface
{
    /** @var \Paranoia\ConfigurationInterface  */
    private $config;

    public function __construct(ConfigurationInterface $config)
    {
        $this->config = $config;
    }

    /**
     * @return \Paranoia\ConfigurationInterface
     */
    protected function getConfig()
    {
        return $this->config;
    }

    /**
     * @param mixed $rawResponse
     * @return \Paranoia\Transfer\ResponseInterface
     */
    abstract protected function prepareResponse($rawResponse);
}