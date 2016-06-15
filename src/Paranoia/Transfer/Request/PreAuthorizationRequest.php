<?php
namespace Paranoia\Transfer\Request;

class PreAuthorizationRequest extends AbstractRequest
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
     * @var \Paranoia\Transfer\Request\ResourceInterface
     */
    private $resource;

    /**
     * @var integer
     */
    private $installment;

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return PreAuthorizationRequest
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
     * @return PreAuthorizationRequest
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return ResourceInterface
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param ResourceInterface $resource
     * @return PreAuthorizationRequest
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstallment()
    {
        return $this->installment;
    }

    /**
     * @param int $installment
     * @return PreAuthorizationRequest
     */
    public function setInstallment($installment)
    {
        $this->installment = $installment;
        return $this;
    }
}
