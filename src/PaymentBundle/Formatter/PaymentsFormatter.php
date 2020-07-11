<?php

namespace PaymentBundle\Formatter;

use PaymentBundle\Entity\PaymentEntity;

class PaymentsFormatter
{
    /**
     * @var array
     */
    private $data = [
		'code'   => 200, 
		'status' => 'OK', 
		'items'  => []
	];

    /**
     * @var array
     */
    private $payments = [];

    /**
     * PaymentsFormatter constructor.
     *
     * @param array $payments
     */
    public function __construct(array $payments)
	{
	    foreach ($payments as $payment) {
	        if ($payment instanceof PaymentEntity) {
                $this->payments[] = $payment;
            }
        }
	}

    /**
     * Return formatted array of payments
     *
     * @return array
     */
    public function format()
	{
    	foreach ($this->payments as $payment) {
    		$this->data['items'][] = [
    			'account'    => $payment->getAccount(),
    			'amount'     => $payment->getAmount(),
    			'to_account' => $payment->getToAccount(),
    			'direction'  => $payment->getDirection()
    		];
    	}

    	return $this->data;
	}
}