<?php
namespace Paranoia\Configuration;

use Paranoia\ConfigurationInterface;

abstract class AbstractConfiguration implements ConfigurationInterface
{
    /**
     * @var string
     */
    private $apiUrl;

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * @param string $apiUrl
     * @return AbstractConfiguration
     */
    public function setApiUrl($apiUrl)
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }
}