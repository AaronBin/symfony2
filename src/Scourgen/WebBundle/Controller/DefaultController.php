<?php

namespace Scourgen\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/hi/{name}")
     * @Template()
     */
    public function indexAction($name)
    {

        $this->getRequest()->isXmlHttpRequest();



        return array('name' => $name);
    }
}
