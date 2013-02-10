<?php

namespace Web\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Web\WebBundle\Entity\Message;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('WebWebBundle:Default:index.html.twig');
    }
    
    public function catalegAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
 
        $postres = $em->getRepository('WebWebBundle:Postre')->findAll();
     
        return $this->render('WebWebBundle:Default:cataleg.html.twig', array(
          'postres' => $postres
        ));
    }

    public function contacteAction()
    {
        return $this->render('WebWebBundle:Default:contacte.html.twig');
    }

}
