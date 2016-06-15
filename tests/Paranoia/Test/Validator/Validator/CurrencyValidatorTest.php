<?php
namespace Paranoia\Test\Validator\Validator;

use Paranoia\Transfer\Request\SaleRequest;
use Paranoia\Validator\NullValidator;
use Paranoia\Validator\Validator\CurrencyValidator;
use SebastianBergmann\Money\Currency;

class CurrencyValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Paranoia\Transfer\Request\SaleRequest
     */
    private $request;

    /**
     * @var \Paranoia\Validator\Validator\CurrencyValidator
     */
    private $validator;

    public function setUp()
    {
        parent::setUp();
        $validator = new NullValidator();
        $this->validator = new CurrencyValidator($validator);
        $this->request = new SaleRequest();
    }

    public function testValidCurrencyValue()
    {
        $this->request->setCurrency(new Currency('TRY'));
        $this->assertTrue($this->validator->validate($this->request));
    }
}
