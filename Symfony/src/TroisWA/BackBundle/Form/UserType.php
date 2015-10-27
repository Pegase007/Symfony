<?php

namespace TroisWA\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TroisWA\BackBundle\Repository\GroupeRepository;
use Doctrine\ORM\EntityRepository;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('email')
            ->add('login')
            ->add('password', 'repeated', array(
                'type' => 'password',
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('gender','choice', array(
                'choices' => array('m' => 'Male', 'f' => 'Female')))
            ->add('address',"text")
            ->add('phone')
            ->add('city')
            ->add('pc')
            ->add('country')
            ->add('groupes', 'entity' ,[

                "multiple"=>true,
                'class' => 'TroisWA\BackBundle\Entity\Groupe',
                'choice_label' => 'name',
                'query_builder'=>function(GroupeRepository $er){

                    return $er->findAllGroups();
                }

            ])

           ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TroisWA\BackBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'troiswa_backbundle_user';
    }
}
