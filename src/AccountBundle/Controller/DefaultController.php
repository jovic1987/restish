<?php

namespace AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AccountBundle\Entity\AccountEntityRepository;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	$accounts = $this->getDoctrine()
        ->getRepository('AccountBundle:AccountEntity')
        ->findAll();

        echo "accounts:";

        var_dump($accounts);exit;
        
        return $this->render('AccountBundle:Default:index.html.twig', array('name' => $name));
    }
}
