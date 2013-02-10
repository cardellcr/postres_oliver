<?php

namespace Web\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Web\WebBundle\Entity\Postre;
use Web\WebBundle\Form\PostreType;

/**
 * Postre controller.
 *
 */
class PostreController extends Controller
{
    /**
     * Lists all Postre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WebWebBundle:Postre')->findAll();

        return $this->render('WebWebBundle:Postre:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Postre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WebWebBundle:Postre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Postre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WebWebBundle:Postre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Postre entity.
     *
     */
    public function newAction()
    {
        $entity = new Postre();
        $form   = $this->createForm(new PostreType(), $entity);

        return $this->render('WebWebBundle:Postre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Postre entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Postre();
        $form = $this->createForm(new PostreType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('postre_show', array('id' => $entity->getId())));
        }

        return $this->render('WebWebBundle:Postre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Postre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WebWebBundle:Postre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Postre entity.');
        }

        $editForm = $this->createForm(new PostreType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WebWebBundle:Postre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Postre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WebWebBundle:Postre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Postre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PostreType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('postre_edit', array('id' => $id)));
        }

        return $this->render('WebWebBundle:Postre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Postre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WebWebBundle:Postre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Postre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('postre'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
