<?php

namespace TroisWA\BackBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TroisWA\BackBundle\Entity\Brand;
use TroisWA\BackBundle\Form\BrandType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * Brand controller.
 *
 */
class BrandController extends Controller
{

    /**
     * Lists all Brand entities.
     *
     */
    public function indexAction(Request $request, $page)
    {
        $em = $this->getDoctrine()->getManager();

//        $allEntities = $em->getRepository('TroisWABackBundle:Brand')->findAll();
        $allEntities=$em->createQuery("SELECT mar FROM TroisWABackBundle:Brand mar");


        if(empty($page))
        {
            $page=$request->query->getInt('page',1);
        }

        $paginator  = $this->get('knp_paginator');
        $entities = $paginator->paginate(
            $allEntities,
            $page/*page number*/,
            5/*limit per page*/
        );



        return $this->render('TroisWABackBundle:Brand:index.html.twig', array(
            'entities' => $entities,
        ));





    }
    /**
     * Creates a new Brand entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Brand();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('brand_show', array('id' => $entity->getSlug())));
        }

        return $this->render('TroisWABackBundle:Brand:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Brand entity.
     *
     * @param Brand $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Brand $entity)
    {
        $form = $this->createForm(new BrandType(), $entity, array(
            'action' => $this->generateUrl('brand_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Brand entity.
     *
     */
    public function newAction()
    {
        $entity = new Brand();
        $form   = $this->createCreateForm($entity);

        return $this->render('TroisWABackBundle:Brand:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     *
     *  path: /marque/{id}/:show
     * entity = nom de la variable
     * id = variable du routing
     * slug = nom de la colonne dans la base de données
     * @ParamConverter("entity", class="TroisWABackBundle:Brand", options={"mapping": {"id" = "slug"}})
     */
    public function showAction(Brand $entity)
    {

        $em = $this->getDoctrine()->getManager();

//        $entity = $em->getRepository('TroisWABackBundle:Brand')->findOneBy(['slug'=>$id]);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Brand entity.');
        }

        $deleteForm = $this->createDeleteForm($entity->getId());

        return $this->render('TroisWABackBundle:Brand:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Brand entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TroisWABackBundle:Brand')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Brand entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TroisWABackBundle:Brand:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Brand entity.
    *
    * @param Brand $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Brand $entity)
    {
        $form = $this->createForm(new BrandType(), $entity, array(
            'action' => $this->generateUrl('brand_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Brand entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TroisWABackBundle:Brand')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Brand entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('brand_edit', array('id' => $id)));
        }

        return $this->render('TroisWABackBundle:Brand:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Brand entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TroisWABackBundle:Brand')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Brand entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('brand'));
    }

    /**
     * Creates a form to delete a Brand entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('brand_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
