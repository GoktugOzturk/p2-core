<?php
namespace Paranoia\Transfer\Request;

use SebastianBergmann\Money\Currency;

class RefundRequest extends AbstractRequest
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var \SebastianBergmann\Money\Currency
     */
    private $currency;

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return RefundRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return \SebastianBergmann\Money\Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param \SebastianBergmann\Money\Currency $currency
     * @return RefundRequest
     */
    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
        return $this;
    }
}