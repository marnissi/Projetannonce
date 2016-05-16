<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UtilisateursBundle:Default:Acceuil.html.twig');
    }
    public function adminPageAction()
    {
        return $this->render('UtilisateursBundle:Default:admin.html.twig');
    }
    public function clientPageAction()
    {
        return $this->render('UtilisateursBundle:Default:client.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function showUserAction()
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('UtilisateursBundle:Default:admin.html.twig');
        }
        if($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            return $this->render('UtilisateursBundle:Default:client.html.twig');
        }
    }
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function determinUserAction(){
        return $this->render('UtilisateursBundle:Default:user.html.twig');
    }

}
