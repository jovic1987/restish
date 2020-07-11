<?php

namespace AccountBundle\Formatter;

use AccountBundle\Entity\AccountEntity;

class AccountsFormatter
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
     * AccountsFormatter constructor.
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
     * Return formatted array of accounts
     *
     * @return array
     */
    public function format()
	{
    	foreach ($this->accounts as $account) {
    		$this->data['items'][] = [
    			'id'       => $account->getId(), 
    			'owner'    => $account->getOwner(),
    			'balance'  => $account->getBalance(),
    			'currency' => $account->getCurrency()
    		];
    	}

    	return $this->data;
	}
}