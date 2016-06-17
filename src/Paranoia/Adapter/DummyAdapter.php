<?php
namespace Paranoia\Adapter;

use Paranoia\ConfigurationInterface;
use Paranoia\Factory\DummyFactory;

class DummyAdapter extends AbstractAdapter
{
    public function __construct(ConfigurationInterface $config)
    {
        parent::__construct($config, new DummyFactory($config));
    }
}
