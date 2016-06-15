<?php
namespace Paranoia\Validator\Validator;

use Paranoia\Exception\ValidationError;
use Paranoia\Transfer\Request\ResourceInterface;
use Paranoia\TransferInterface;

class ResourceValidator extends AbstractValidator
{
    /**
     * @param TransferInterface $object
     * @return bool
     * @throws ValidationError
     */
    public function validate(TransferInterface $object)
    {
        $this->validator->validate($object);
        if (!$object->getResource() instanceof ResourceInterface) {
            throw new ValidationError('Resource does not have a valid resource.');
        }
        return true;
    }
}
