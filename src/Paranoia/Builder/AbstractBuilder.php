<?php
namespace Paranoia\Builder;

use Paranoia\BuilderInterface;
use Paranoia\ConfigurationInterface;
use Paranoia\Transfer\RequestInterface;

abstract class AbstractBuilder implements BuilderInterface
{
    /** @var \Paranoia\ConfigurationInterface */
    private $config;

    public function __construct(ConfigurationInterface $config)
    {
        $this->config = $config;
    }

    /**
     * @param \Paranoia\Transfer\RequestInterface $request
     * @return mixed
     */
    abstract protected function prepareRequest(RequestInterface $request);

    /**
     * @return \Paranoia\ConfigurationInterface
     */
    protected function getConfig()
    {
        return $this->config;
    }
}