<?php

namespace TroisWA\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TroisWA\BackBundle\Form\Type\GenderType;
use TroisWA\BackBundle\Form\Type\PhoneType;
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
            ->add('gender','gender')
            ->add('address',"text")
            ->add('phone',new PhoneType())
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

            ]);

        // Greffer un événement PRE_SET_DATA (avant l'affichage du formulaire)*
        // On lance la méthode editUser
        //PENSER A USER
        $builder->addEventListener(FormEvents::PRE_SET_DATA, [$this,'editUser']);
//        $builder->addEventListener(FormEvents::SUBMIT, [$this,'editUser']);

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


    public function editUser(FormEvent $event)
    {
//        //die('ok');
        $user = $event->getData(); // objet user
        $form = $event->getForm(); // le formulaire

        // Si j'ai un utilisateur et que l'id de l'utilisateur existe = je suis entrain de faire une modification
        if ($user && $user->getId())
        {
            $form->remove('login');
        }

    }

}
