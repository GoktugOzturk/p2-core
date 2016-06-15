<?php
namespace Paranoia\Validator\Validator;

use Paranoia\Exception\ValidationError;
use Paranoia\TransferInterface;
use SebastianBergmann\Money\Currency;

class CurrencyValidator extends AbstractValidator
{
    /**
     * @param TransferInterface $object
     * @return bool
     * @throws ValidationError
     */
    public function validate(TransferInterface $object)
    {
        $this->validator->validate($object);
        if(!$object->getCurrency() instanceof Currency) {
            throw new ValidationError('Currency is not set properly.');
        }
        return true;
    }
}