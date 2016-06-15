<?php
namespace Paranoia\Validator\Validator;

use Paranoia\Exception\ValidationError;
use Paranoia\TransferInterface;

class AmountValidator extends AbstractValidator
{
    /**
     * @param TransferInterface $object
     * @return bool
     * @throws ValidationError
     */
    public function validate(TransferInterface $object)
    {
        $this->validator->validate($object);
        if (!is_numeric($object->getAmount())) {
            throw new ValidationError('Amount must have a numeric value.');
        }
        return true;
    }
}
