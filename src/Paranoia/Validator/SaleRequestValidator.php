<?php
namespace Paranoia\Validator;


class SaleRequestValidator extends AbstractValidator
{
    public function __construct()
    {
        $this->setValidators(array(
            '\\Paranoia\\Validator\\Validator\\AmountValidator',
            '\\Paranoia\\Validator\\Validator\\CurrencyValidator',
            '\\Paranoia\Validator\Validator\ResourceValidator',
        ));
    }
}