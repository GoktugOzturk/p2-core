<?php
namespace Paranoia;

interface ValidatorInterface
{
    /**
     * @param TransferInterface $object
     * @throws \Paranoia\Exception\ValidationError
     * @return bool
     */
    public function validate(TransferInterface $object);
}
