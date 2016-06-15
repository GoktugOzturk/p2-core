<?php
namespace Paranoia\Validator;

class PaymentCardSaleRequestValidator extends SaleRequestValidator
{
    public function __construct()
    {
        parent::__construct();
        $this->addValidator('\\Paranoia\\Validator\\Validator\\PaymentCardValidator');
    }
}