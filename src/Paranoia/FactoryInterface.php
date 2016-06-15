<?php
namespace Paranoia;

interface FactoryInterface
{
    const OBJECT_CLASS_BUILDER = 'Builder';
    const OBJECT_CLASS_PROCESSOR = 'Processor';

    /**
     * @param string $builderType
     * @return \Paranoia\BuilderInterface
     */
    public function createBuilder($builderType);

    /**
     * @param string $processorType
     * @return \Paranoia\ProcessorInterface
     */
    public function createProcessor($processorType);
}