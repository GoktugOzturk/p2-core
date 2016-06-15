<?php
namespace Paranoia\Factory;

use Paranoia\ConfigurationInterface;
use Paranoia\Exception\ImplementationError;
use Paranoia\FactoryInterface;

abstract class AbstractFactory implements FactoryInterface
{
    const VENDOR_NAME = null;

    /**
     * @var \Paranoia\ConfigurationInterface
     */
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
     * @param string $objectClass
     * @param string $objectType
     * @return string
     * @throws ImplementationError
     */
    private function getObjectName($objectClass, $objectType)
    {
        if(!static::VENDOR_NAME) {
            throw new ImplementationError('VENDOR_NAME constant must be declared in implementation class.');
        }

        return sprintf('\\Paranoia\\%s\\%s\\%s', $objectClass, static::VENDOR_NAME, $objectType);
    }

    /**
     * @param string $builderType
     * @return string
     * @throws ImplementationError
     */
    protected function getBuilder($builderType)
    {
        return $this->getObjectName(FactoryInterface::OBJECT_CLASS_BUILDER, $builderType);
    }

    /**
     * @param string $processorType
     * @return string
     * @throws ImplementationError
     */
    protected function getProcessor($processorType)
    {
        return $this->getObjectName(FactoryInterface::OBJECT_CLASS_PROCESSOR, $processorType);
    }

    /**
     * @param string $builderType
     * @return \Paranoia\BuilderInterface
     * @throws ImplementationError
     */
    public function createBuilder($builderType)
    {
        $builder = $this->getBuilder($builderType);
        if(!class_exists($builder)) {
            throw new ImplementationError("${builderType} is not implemented yet!");
        }
        return new $builder($this->getConfig());
    }

    /**
     * @param string $processorType
     * @return \Paranoia\ProcessorInterface
     * @throws ImplementationError
     */
    public function createProcessor($processorType)
    {
        $processor = $this->getProcessor($processorType);
        if(!class_exists($processor)) {
            throw new ImplementationError("${processorType} is not implemented yet!");
        }
        return new $processor($this->getConfig());
    }
}