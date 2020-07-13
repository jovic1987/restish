<?php

namespace PaymentBundle\Formatter;

use Symfony\Component\Validator\ConstraintViolationList;

class ErrorFormatter
{
    /**
     * @var array
     */
    private $data = [
		'errors'  => []
	];

    /**
     * @var array
     */
    private $errors = [];

    /**
     * ErrorFormatter constructor.
     *
     * @param ConstraintViolationList $errors
     */
    public function __construct(ConstraintViolationList $errors)
	{
	    foreach ($errors as $error) {
	        $this->errors[] = $error->getMessage();
        }
	}

    /**
     * Return array of error messages.
     *
     * @return array
     */
    public function format(): array
	{
    	$this->data['errors'] = $this->errors;

    	return $this->data;
	}
}