<?php

namespace AccountBundle\Controller;

use AccountBundle\Formatter\AccountsFormatter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\FOSRestController;

class DefaultController extends FOSRestController
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
