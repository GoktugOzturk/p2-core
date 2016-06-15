<?php
namespace Paranoia\Transfer\Request\Resource;

use Paranoia\Transfer\Request\ResourceInterface;

class PaymentCard implements ResourceInterface
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var integer
     */
    private $securityCode;

    /**
     * @var integer
     */
    private $expireYear;

    /**
     * @var integer
     */
    private $expireMonth;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return PaymentCard
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * @param int $securityCode
     * @return PaymentCard
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpireYear()
    {
        return $this->expireYear;
    }

    /**
     * @param int $expireYear
     * @return PaymentCard
     */
    public function setExpireYear($expireYear)
    {
        $this->expireYear = $expireYear;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpireMonth()
    {
        return $this->expireMonth;
    }

    /**
     * @param int $expireMonth
     * @return PaymentCard
     */
    public function setExpireMonth($expireMonth)
    {
        $this->expireMonth = $expireMonth;
        return $this;
    }
}