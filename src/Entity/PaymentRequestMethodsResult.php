<?php

namespace Paysera\Client\CheckoutClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Result;

class PaymentRequestMethodsResult extends Result
{
    protected function createItem(array $data)
    {
        return new PaymentRequestMethod($data);
    }
}
