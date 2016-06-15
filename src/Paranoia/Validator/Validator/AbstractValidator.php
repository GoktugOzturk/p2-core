<?php
namespace Paranoia\Validator\Validator;

use Paranoia\ValidatorInterface;

abstract class AbstractValidator implements ValidatorInterface
{

    /** @var \Paranoia\ValidatorInterface  */
    protected $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }
}
