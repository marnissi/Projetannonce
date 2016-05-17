<?php

namespace Annonce\AnnonceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Annonce\AnnonceBundle\Entity\DetailAnnonce;
use Annonce\AnnonceBundle\Form\DetailAnnonceType;

/**
 * DetailAnnonce controller.
 *
 */
class DetailAnnonceController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $detailAnnonces = $em->getRepository('AnnonceBundle:DetailAnnonce')->findAll();
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('AnnonceBundle:Administration:detailannonce/index.html.twig', array(
                'detailAnnonces' => $detailAnnonces,
            ));
        }
        if($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            return $this->render('AnnonceBundle:Detailannonce:index.html.twig', array(
                'detailAnnonces' => $detailAnnonces,
            ));
        }



    }

    /**
     * Creates a new DetailAnnonce entity.
     *
     */
    public function newAction(Request $request)
    {
        $detailAnnonce = new DetailAnnonce();
        $form = $this->createForm('Annonce\AnnonceBundle\Form\DetailAnnonceType', $detailAnnonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($detailAnnonce);
            $em->flush();

            return $this->redirectToRoute('detailannonce_show', array('id' => $detailAnnonce->getId()));
        }

        return $this->render('AnnonceBundle:DetailAnnonce:new.html.twig', array(
            'detailAnnonce' => $detailAnnonce,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DetailAnnonce entity.
     *
     */
    public function showAction(DetailAnnonce $detailAnnonce)
    {
        $deleteForm = $this->createDeleteForm($detailAnnonce);

        return $this->render('AnnonceBundle:DetailAnnonce:show.html.twig', array(
            'detailAnnonce' => $detailAnnonce,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DetailAnnonce entity.
     *
     */
    public function editAction(Request $request, DetailAnnonce $detailAnnonce)
    {
        $deleteForm = $this->createDeleteForm($detailAnnonce);
        $editForm = $this->createForm('Annonce\AnnonceBundle\Form\DetailAnnonceType', $detailAnnonce);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($detailAnnonce);
            $em->flush();

            return $this->redirectToRoute('detailannonce_edit', array('id' => $detailAnnonce->getId()));
        }

        return $this->render('AnnonceBundle:DetailAnnonce:edit.html.twig', array(
            'detailAnnonce' => $detailAnnonce,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a DetailAnnonce entity.
     *
     */
    public function deleteAction(Request $request, DetailAnnonce $detailAnnonce)
    {
        $form = $this->createDeleteForm($detailAnnonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($detailAnnonce);
            $em->flush();
        }

        return $this->redirectToRoute('detailannonce_index');
    }

    /**
     * Creates a form to delete a DetailAnnonce entity.
     *
     * @param DetailAnnonce $detailAnnonce The DetailAnnonce entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DetailAnnonce $detailAnnonce)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('detailannonce_delete', array('id' => $detailAnnonce->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function categorieAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('AnnonceBundle:DetailAnnonce')->findByCategorie($categorie);

        return $this->render('AnnonceBundle:detailannonce:index.html.twig', array(
            'detailAnnonces' => $annonces,
        ));
    }
    /**
     * Finds and displays a DetailAnnonce entity.
     *
     */
    public function navbarAction()
    {
        return $this->render('AnnonceBundle:Default:navbar.html.twig'
        );
    }
    /**
     * Finds and displays a DetailAnnonce entity.
     *
     */
    public function collapsenavbarAction()
    {
        return $this->render('AnnonceBundle:Default:collapsenavbar.html.twig'
        );
    }
}
