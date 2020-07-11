<?php

namespace AccountBundle\Controller;

use AccountBundle\Response\AccountCollectionResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * Return the list of all accounst
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function indexAction()
    {
    	$accounts = $this->container->get('account.account_manager')->getAllAccounts();

        return (new AccountCollectionResponse($accounts))->toJson();
    }
}
