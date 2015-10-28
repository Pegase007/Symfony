<?php
namespace TroisWA\BackBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenderType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'choices' => array('m' => 'Male', 'f' => 'Female')
            ]);
    }

    public function getName()
    {
        return 'gender';
    }

    public function getParent()
    {
        return 'choice';
    }
}

