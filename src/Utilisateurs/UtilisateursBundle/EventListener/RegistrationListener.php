<?php
/**
 * Created by PhpStorm.
 * User: marnissi
 * Date: 5/15/2016
 * Time: 3:25 PM
 */

namespace Utilisateurs\UtilisateursBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;



class RegistrationListener implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return array(FOSUserEvents::REGISTRATION_SUCCESS =>'onRegistrationSuccess');
    }
    public function onRegistrationSuccess(FormEvent $event){
        $rols = array('ROLE_BIDON');
        $user=$event->getForm()->getData();
        $user->setRoles($rols);
    }
}