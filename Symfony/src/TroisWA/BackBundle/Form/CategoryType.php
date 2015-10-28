<?php

namespace TroisWA\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{


    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('position')
            ->add('activate')
            ->add("image",new ImageType());

        // Greffer un événement PRE_SET_DATA (avant l'affichage du formulaire)*
        // On lance la méthode editUser
        //PENSER A USER
        $builder->addEventListener(FormEvents::PRE_SET_DATA, [$this,'editCategory']);
//        $builder->addEventListener(FormEvents::SUBMIT, [$this,'editUser']);
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TroisWA\BackBundle\Entity\Category'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'troiswa_backbundle_category';
    }

    public function editCategory(FormEvent $event)
    {
//        //die('ok');
        $user = $event->getData(); // objet user
        $form = $event->getForm(); // le formulaire

        // Si j'ai un utilisateur et que l'id de l'utilisateur existe = je suis entrain de faire une modification
        if ($user && $user->getId())
        {
            $form->remove('position');
        }

    }



}
