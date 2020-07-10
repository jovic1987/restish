<?php

namespace AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use AccountBundle\Response\AccountCollectionResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {	
    	$accounts = $this->getDoctrine()->getRepository('AccountBundle:AccountEntity')->findAll();

        return (new AccountCollectionResponse($accounts))->toJson();
    }
}
