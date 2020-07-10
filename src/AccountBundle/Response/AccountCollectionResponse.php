<?php

namespace AccountBundle\Response;

use Symfony\Component\HttpFoundation\JsonResponse;

class AccountCollectionResponse
{
	private $data = [
		'code'   => 200, 
		'status' => 'OK', 
		'items'  => []
	];
	
	private $accounts;
	
	public function __construct(array $accounts)
	{
		$this->accounts = $accounts;
	}

	public function toJson() 
	{
    	foreach ($this->accounts as $account) {
    		$this->data['items'][] = [
    			'id'       => $account->getId(), 
    			'owner'    => $account->getOwner(),
    			'balance'  => $account->getBalance(),
    			'currency' => $account->getCurrency()
    		];
    	}

    	return new JsonResponse($this->data);
	}
}