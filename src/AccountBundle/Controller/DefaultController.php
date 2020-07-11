<?php

namespace AccountBundle\Controller;

use AccountBundle\Formatter\AccountsFormatter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * Return the list of all accounts
     *
     * @return JsonResponse
     */
    public function indexAction()
    {
    	$accounts = $this->container->get('account.account_manager')->getAllAccounts();

    	return new JsonResponse((new AccountsFormatter($accounts))->format());
    }
}
