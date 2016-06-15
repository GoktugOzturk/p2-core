<?php
namespace Paranoia\Test\Validator\Validator;

use Paranoia\Transfer\Request\Resource\PaymentCard;
use Paranoia\Transfer\Request\SaleRequest;
use Paranoia\Validator\NullValidator;
use Paranoia\Validator\Validator\PaymentCardValidator;

class PaymentCardValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Paranoia\Transfer\Request\SaleRequest
     */
    private $request;

    /**
     * @var \Paranoia\Validator\Validator\PaymentCardValidator
     */
    private $validator;

    public function setUp()
    {
        parent::setUp();
        $validator = new NullValidator();
        $this->validator = new PaymentCardValidator($validator);
        $this->request = new SaleRequest();
        $this->request->setResource(new PaymentCard());
    }

    /**
     * @expectedException \Paranoia\Exception\ValidationError
     */
    public function testMissedCardNumberAndValidExpireDate()
    {
        /** @var \Paranoia\Transfer\Request\Resource\PaymentCard $card */
        $card = $this->request->getResource();
        $card->setNumber('123456')
            ->setExpireMonth(date('n') + 1)
            ->setExpireYear(date('Y'));
        $this->validator->validate($this->request);
    }

    /**
     * @expectedException \Paranoia\Exception\ValidationError
     */
    public function testInvalidCardNumberAndValidExpireDate()
    {
        /** @var \Paranoia\Transfer\Request\Resource\PaymentCard $card */
        $card = $this->request->getResource();
        $card->setNumber('5105105105105101')
            ->setExpireMonth(date('n') + 1)
            ->setExpireYear(date('Y'));
        $this->validator->validate($this->request);
    }

    /**
     * @expectedException \Paranoia\Exception\ValidationError
     */
    public function testValidCardNumberMissedExpireDate()
    {
        /** @var \Paranoia\Transfer\Request\Resource\PaymentCard $card */
        $card = $this->request->getResource();
        $card->setNumber('5105105105105100')
            ->setExpireMonth(date('n') - 1)
            ->setExpireYear(date('Y'));
        $this->validator->validate($this->request);
    }

    /**
     * @expectedException \Paranoia\Exception\ValidationError
     */
    public function testValidCardNumberEmptyExpireDate()
    {
        /** @var \Paranoia\Transfer\Request\Resource\PaymentCard $card */
        $card = $this->request->getResource();
        $card->setNumber('5105105105105100')
            ->setExpireMonth(null)
            ->setExpireYear(null);
        $this->validator->validate($this->request);
    }

    public function testValidCardNumberAndValidDate()
    {
        /** @var \Paranoia\Transfer\Request\Resource\PaymentCard $card */
        $card = $this->request->getResource();
        $card->setNumber('5105105105105100')
            ->setExpireMonth(date('n') + 1)
            ->setExpireYear(date('Y'));
        $this->assertTrue($this->validator->validate($this->request));
    }
}
