<?php
namespace Paranoia\Validator\Validator;

use Paranoia\Exception\ValidationError;
use Paranoia\Transfer\Request\Resource\PaymentCard;
use Paranoia\TransferInterface;

class PaymentCardValidator extends AbstractValidator
{
    /**
     * @param \Paranoia\Transfer\Request\Resource\PaymentCard $card
     * @throws ValidationError
     */
    private function validateCardNumber(PaymentCard $card)
    {
        $sum = 0;
        $weight = 2;
        $number = $card->getNumber();
        $length = strlen($number);
        for ($i = $length -2; $i >= 0; $i--) {
            $digit = $weight * $number[$i];
            $sum += floor($digit / 10) + $digit % 10;
            $weight = $weight % 2 + 1;
        }
        if ((10 - $sum % 10) % 10 != $number[$length - 1]) {
            throw new ValidationError('Bad card number.');
        }
    }

    /**
     * @param \Paranoia\Transfer\Request\Resource\PaymentCard $card
     * @throws ValidationError
     */
    private function validateExpireDate(PaymentCard $card)
    {
        $cardExpireTime = strtotime(
            date('Y-m-t', strtotime(sprintf('%d-%02d-1', $card->getExpireYear(), $card->getExpireMonth())))
        );
        if (strtotime(date('Y-m-d')) > $cardExpireTime) {
            throw new ValidationError('Card is expired');
        }
    }

    /**
     * @param TransferInterface $object
     * @return bool
     * @throws ValidationError
     */
    public function validate(TransferInterface $object)
    {
        $this->validator->validate($object);
        $this->validateCardNumber($object->getResource());
        $this->validateExpireDate($object->getResource());
        return true;
    }
}
