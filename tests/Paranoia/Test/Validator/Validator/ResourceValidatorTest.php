<?php
namespace Paranoia\Test\Validator\Validator;

use Paranoia\Transfer\Request\Resource\PaymentCard;
use Paranoia\Transfer\Request\SaleRequest;
use Paranoia\Validator\NullValidator;
use Paranoia\Validator\Validator\ResourceValidator;

class ResourceValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Paranoia\Transfer\Request\SaleRequest
     */
    private $request;

    /**
     * @var \Paranoia\Validator\Validator\ResourceValidator
     */
    private $validator;

    public function setUp()
    {
        parent::setUp();
        $validator = new NullValidator();
        $this->validator = new ResourceValidator($validator);
        $this->request = new SaleRequest();
    }

    /**
     * @expectedException \Paranoia\Exception\ValidationError
     */
    public function testNullValue()
    {
        $this->request->setResource(null);
        $this->validator->validate($this->request);
    }

    /**
     * @expectedException \Paranoia\Exception\ValidationError
     */
    public function testIntegerType()
    {
        $this->request->setResource(1);
        $this->validator->validate($this->request);
    }

    /**
     * @expectedException \Paranoia\Exception\ValidationError
     */
    public function testStringType()
    {
        $this->request->setResource('asdfg');
        $this->validator->validate($this->request);
    }

    /**
     * @expectedException \Paranoia\Exception\ValidationError
     */
    public function testClassType()
    {
        $this->request->setResource(new \stdClass());
        $this->validator->validate($this->request);
    }

    public function testValidType()
    {
        $this->request->setResource(new PaymentCard());
        $this->assertTrue($this->validator->validate($this->request));
    }
}
