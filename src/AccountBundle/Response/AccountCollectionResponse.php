<?php

namespace AccountBundle\Response;

use AccountBundle\Entity\AccountEntity;
use Symfony\Component\HttpFoundation\JsonResponse;

class AccountCollectionResponse
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
    private $accounts = [];

    /**
     * AccountCollectionResponse constructor.
     *
     * @param array $accounts
     */
    public function __construct(array $accounts)
	{
	    foreach ($accounts as $account) {
	        if ($account instanceof AccountEntity) {
                $this->accounts[] = $account;
            }
        }
	}

    /**
     * Return json response for provided account records
     *
     * @return JsonResponse
     */
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