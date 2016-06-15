<?php
namespace Paranoia\Test\Validator\Validator;

use Paranoia\Transfer\Request\SaleRequest;
use Paranoia\Validator\NullValidator;
use Paranoia\Validator\Validator\AmountValidator;

class AmountValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Paranoia\Transfer\Request\SaleRequest
     */
    private $request;

    /**
     * @var \Paranoia\Validator\Validator\AmountValidator
     */
    private $validator;

    public function setUp()
    {
        $validator  =

        parent::setUp();
        $validator = new NullValidator();
        $this->validator = new AmountValidator($validator);
        $this->request = new SaleRequest();
    }

    public function testIntegerAmount()
    {
        $this->request->setAmount(1);
        $this->assertTrue($this->validator->validate($this->request));
    }

    public function testFloatAmount()
    {
        $this->request->setAmount(1.5);
        $this->assertTrue($this->validator->validate($this->request));
    }

    public function testZeroAmount()
    {
        $this->request->setAmount(0);
        $this->assertTrue($this->validator->validate($this->request));
    }

    /**
     * @expectedException \Paranoia\Exception\ValidationError
     */
    public function testNullAmount()
    {
        $this->request->setAmount(null);
        $this->validator->validate($this->request);
    }
}
