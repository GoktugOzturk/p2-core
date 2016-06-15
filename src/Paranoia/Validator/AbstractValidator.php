<?php
namespace Paranoia\Validator;

use Paranoia\Exception\ImplementationError;
use Paranoia\TransferInterface;
use Paranoia\ValidatorInterface;
use Symfony\Component\Config\Tests\Util\Validator;

abstract class AbstractValidator implements ValidatorInterface
{
    /**
     * array of ValidatorInterface implementations.
     * @var array
     */
    protected $validators = array();

     /**
      * @param array $validators
      * @throws ImplementationError
      */
    protected function checkValidators(array $validators)
    {
        foreach ($validators as $validator) {
            if (!class_exists($validator)) {
                throw new ImplementationError($validator .' class does not exists.');
            }

            $refClass = new \ReflectionClass($validator);

            if (!$refClass->implementsInterface('\\Paranoia\\ValidatorInterface')) {
                throw new ImplementationError(
                    $validator .' must be implementation ' .
                    'of \Paranoia\ValidatorInterface'
                );
            }
        }
    }

     /**
      * @param array $validators
      * @throws ImplementationError
      */
    protected function setValidators(array $validators)
    {
        $this->checkValidators($validators);
        $this->validators = $validators;
    }

    /**
     * @param $validatorName
     * @throws ImplementationError
     */
    public function addValidator($validatorName)
    {
        $this->checkValidators(array($validatorName));
        $this->validators[] = $validatorName;
    }

    /**
     * @param TransferInterface $object
     * @throws \Paranoia\Exception\ValidationError
     * @return bool
     */
    public function validate(TransferInterface $object)
    {
        $this->checkValidators($this->validators);
        foreach ($this->validators as $validatorName) {
            /** @var \Paranoia\ValidatorInterface $validator */
            $validator = new $validatorName($this);
            $validator->validate($object);
        }
        return true;
    }
}
